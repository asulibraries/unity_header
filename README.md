# ASU Unity Design System header/footer

A Drupal 8/9 compatible module to apply the Unity Design System header/footer.

## Assumptions

* The site's "Main navigation" menu will be inserted into the header.
* This module was built for a site using a sub-theme of Bootstrap Barrio. ymmv

Important: Per Bootstrap and Web Standards 2.0 sites are only allowed 2 levels of links in the menu.

## Configuration

* The parent unit URL is hardcoded as a variable in xxx.html.twig.
  * Set the site slogan to be the parent unit in Drupal site settings.
* Barrio subtheme config:
  * Layout > Region > Top Header, Header, and Footer fifth regions should all have "no wrapper" checked and no class set (the default is row).
  * A custom page.html.twig file is included for comparison. Any template in the theme will override this module's templates.
  
## Menu configuration

Because of the 2-level limit and to get the desired layout, the module requires menu elements to be set up a certain way.
* Menu items that are links can be regular links.
* Menu items that are dropdown triggers must have `route:<button>` set as the link.
* Menu items that are headers within dropdowns must have `<nolink>` set as the link.

Note: At this time, the modules supports only 1- or 2-column dropdowns.
  
## Block placement and configuration

ASU Global Menu block into the Top Header region.

Main navigation block into the Header region.
Check the "Expand all menu items" box in the block settings for the main navigation block.

Universal Footer block into the Footer fifth region.

Uncheck the "Display title" box on all of these blocks.

## Troubleshooting

If the styles are not being applied to the menu, check to make sure the Main navigation block has the correct machine name/ID.

If the block was added to another theme and then added to your subtheme, the block ID may be `[subtheme]-mainnavigation` instead of `mainnavigation`.

Delete the block from all of the themes where it appears, then add it to your subtheme's block page again. It should have the correct ID.