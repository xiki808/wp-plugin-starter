# WordPress Plugin Starter

A WordPress plugin starter to use as a starting template to build a custom plugin. The template encourages the use of namespaces as specified by [PSR-4](https://www.php-fig.org/psr/psr-4/)

![Template](https://media.giphy.com/media/26ufhYjBs6C4Q5SJG/giphy.gif?style=centerme)

## Getting Started

The template uses a namespace prefix `WPS\`, this can be changed to any other prefix you would like for your plugin, hence it needs to be replaced and used in every class file.

1. Replace the prefix `WPS\` in wp-plugin-starter.php with your custom one.
2. Replace the prefix in files `Admin/Init.php` and `Front/Init.php`.

In this template code is organized under two main namespaces:
- `Includes/Admin` for back-end related code
- `Includes/Front` for front-end related code

A sub namespace can be used simply by adding a folder either in `Admin` or `Front` folders. If a new namespace is needed, create the folder and add the namespace in `wp-plugin-starter.php` before the `$loader->register();` call.

```
$loader->addNamespace('{MYPREFIX}\{MYNAMESPACE}', __DIR__.'/Path/To/Folder');

// Before the register call
$loader->register();
```

Rename the plugin folder by changing both folder name and main file `wp-plugin-starter.php`.

### Credits
- [PSR-4: Autoloader](https://www.php-fig.org/psr/psr-4/)