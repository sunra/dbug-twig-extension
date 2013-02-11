# dBug Twig Extension

dBug - https://github.com/sunra/dBug very fine looking(maybe best) html var dumper for PHP.

This extension for Twig make available dBug in Twig templates, 
just like:

``` twig
{{ some_variable|dbug }} or {{ some_variable|d }}
```


## Activation
-----
### composer

run

#composer.phar require
and add 
```
"sunra/dbug-twig-extension"
```

### in Symfony

add to main config, or to specific environment:


``` yaml
# /app/config/config.yml
services:
    ...
    dbug.twig.extension:
        class: Sunra\TwigExtensions\DbugExtension
        tags:
            -  { name: twig.extension }			
    ...        
```


