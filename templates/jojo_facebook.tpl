<div class="facebook">
{if $fbtype=='like'}
    <fb:like layout="{if $fblayout}{$fblayout}{else}standard{/if}" colorscheme="{$fbcolorscheme}" show_faces="false"{if $fburl} href="{$fburl}"{/if}{if $fbwidth} width="{$fbwidth}"{/if}></fb:like>
{elseif $fbtype=='likesend'}
    <fb:like layout="{if $fblayout}{$fblayout}{else}standard{/if}" send="true" colorscheme="{$fbcolorscheme}" show_faces="false"{if $fburl} href="{$fburl}"{/if}{if $fbwidth} width="{$fbwidth}"{/if}></fb:like>
{elseif $fbtype=='likeus'}
    <fb:like-box profile_id="{$fbpageid}" stream="false" show_faces= "false" header="false" colorscheme="{$fbcolorscheme}"{if $fbwidth} width="{$fbwidth}"{/if}></fb:like-box>
{elseif $fbtype=='likeus-f'}
    <fb:like-box profile_id="{$fbpageid}" stream="false" header="false" colorscheme="{$fbcolorscheme}"{if $fbwidth} width="{$fbwidth}"{/if}></fb:like-box>
{elseif $fbtype=='likeus-s'}
    <fb:like-box profile_id="{$fbpageid}" stream="true" show_faces= "false" header="false" colorscheme="{$fbcolorscheme}"{if $fbwidth} width="{$fbwidth}"{/if}></fb:like-box>
{elseif $fbtype=='likeus-fs'}
    <fb:like-box profile_id="{$fbpageid}" stream="true" header="false" colorscheme="{$fbcolorscheme}"{if $fbwidth} width="{$fbwidth}"{/if}></fb:like-box>
{elseif $fbtype=='comment'}
    <fb:comments href="{$correcturl}" num_posts="2" colorscheme="{$fbcolorscheme}"{if $fbwidth} width="{$fbwidth}"{/if}></fb:comments>
{/if}
</div>