RedBean Prefix
==============

In a perfect world, we wouldn't have to do this. Nevertheless, we cannot help
it, sometimes.

This is a RedBean plugin that automatically injects prefixes into your table
names.

### Usage

```php
// Include or autoload the files in this library

R::ext( 'prefix', array('RedBean_Prefix', 'prefix') );

R::prefix('my_prefix_');

// If you want to inject it into another instance of RB

$r2db2 = R::instance();

$r2db2::prefix('my_other_db_', $r2db2);
```
