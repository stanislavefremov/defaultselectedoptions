# Product option selected by default
This Opencart extension lets you choose which product option should be shown by default on product's page.

Tested and works on Opencart 3.0.2.0. It works on the live site, however consider to test it on the test installation to prevent any possible issues.

Extension is based on existing similar extension for Opencart 2.3.0.2(Thanks to the author of original extension - user Landsman). Link to the page of original extension:

- On Opencart site: https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=31501&filter_search=selected%20options

- Or at Github: https://github.com/BurdaPraha/oc_default_option

Original extension was adopted for Opencart 3.x and modified into OCMOD.

## Installation

1. In the Admin Backend go to Extensions->Installer, click on Upload button and choose package archive to upload.
2. Visit Extensions->Modifications, check that modification "Product option selected by default" is listed there and click Refresh button at the top right corner near Clear and Delete buttons.
3. Go to Extensions->Extensions and choose "Modules" from extensions types list, find there extension called "Product option selected by default" and click Install button in it. Once installed
click Edit button and set extansion status to Enabled.
4. Go to Catalog->Products and open needed product for edit. Then in the Option tab if there are any options you should see checkbox called default, set it for whatever option should be default for the product.
5. On the site's frontend check that needed deafult option is preselected on product's page.


## Visual installation instructions

![Installation](./installation.gif)
