<?php
/**
 *
 * Copyright 2011 Tom Dale <code@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Tom Dale <code@gardyneholt.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */

Jojo::addFilter('output', 'facebook', 'jojo_facebook');
Jojo::addHook('foot', 'addtofoot', 'jojo_facebook');

$_options[] = array(
    'id'          => 'facebook_id',
    'category'    => 'Social Networking',
    'label'       => 'Facebook Id',
    'description' => 'The Id of your facebook page',
    'type'        => 'text',
    'default'     => '',
    'options'     => ''
);

$_options[] = array(
    'id'          => 'facebook_app_id',
    'category'    => 'Social Networking',
    'label'       => 'Facebook App Id',
    'description' => 'This and/or Admin Ids are required for advanced FB integration and data tracking',
    'type'        => 'text',
    'default'     => '',
    'options'     => ''
);

$_options[] = array(
    'id'          => 'facebook_app_secret',
    'category'    => 'Social Networking',
    'label'       => 'Facebook App Key',
    'description' => 'Secret Key from Facebook',
    'type'        => 'text',
    'default'     => '',
    'options'     => ''
);

$_options[] = array(
    'id'          => 'facebook_colorscheme',
    'category'    => 'Social Networking',
    'label'       => 'Facebook Colorscheme',
    'description' => 'Button colorscheme',
    'type'        => 'radio',
    'default'     => 'light',
    'options'     => 'light,dark'
);
