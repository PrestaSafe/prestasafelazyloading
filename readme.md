# Lazy loading free module PrestaShop 1.5 - 1.7

## how to make it works ? 

install it first, than, modify all images you want to display with it and replace: 

`<img src="path/to/image">`

BY:

`<img class="lazy" data-src="path/to/image">`

## for ajax content 

use `$(document).trigger('needLazy')` for execute the plugin.


And it works. 

