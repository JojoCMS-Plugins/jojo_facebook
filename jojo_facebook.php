<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2007 Harvey Kane <code@ragepank.com>
 * Copyright 2007 Michael Holt <code@gardyneholt.co.nz>
 * Copyright 2007 Melanie Schulz <mel@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @author  Michael Cochrane <code@gardyneholt.co.nz>
 * @author  Melanie Schulz <mel@gardyneholt.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */

class Jojo_Plugin_jojo_facebook extends Jojo_Plugin
{

     public static function facebook($content)
    {
    
        if (strpos($content, '[[facebook:') === false) {
            return $content;
        }
        
        global $smarty, $page;
        $smarty->assign('fbcolorscheme', Jojo::getOption('facebook_colorscheme'));
        $smarty->assign('fbpage', Jojo::getOption('facebook_link'));
        $smarty->assign('fbpageid', Jojo::getOption('facebook_id'));
        $smarty->assign('encodedurl', $page->getCorrectUrl());
        preg_match_all('/\[\[facebook: ?([^\]]*)\]\]/', $content, $matches);
        foreach($matches[1] as $id => $type) {
            if (strpos($type, ':')) {
                $bits = explode(':', $type);
                $type = $bits[0];
                $smarty->assign('fbwidth', (isset($bits[1])? $bits[1] : '' ));
                $smarty->assign('fblayout', (isset($bits[2])? $bits[2] : '' ));
                $smarty->assign('fburl', (isset($bits[3])? $bits[3] : '' ));
            }
            $smarty->assign('fbtype', $type);
            $html = $smarty->fetch('jojo_facebook.tpl');
            $content = str_replace($matches[0][$id], $html, $content);
        }
        return $content;
    }

    public static function addtofoot()
    {
        global $content;
        return '<div id="fb-root"></div>' . "
        <script>
            /*<![CDATA[*/
          window.fbAsyncInit = function() {
            FB.init({appId: '" . Jojo::getOption('facebook_app_id') . "', status: true, cookie: true,
                     xfbml: true});
          };
          (function() {
            var e = document.createElement('script'); e.async = true;
            e.src = document.location.protocol +
              '//connect.facebook.net/" . ($content['languagecode'] ? $content['languagecode'] : 'en_GB' ) . "/all.js';
            document.getElementById('fb-root').appendChild(e);
          }());
            /*]]>*/
        </script>
        ";
    }

}