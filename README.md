openlss/func-mda-glob
=============

MDA (Multi Dimensional Array) access helpers for PHPs Superglobals

Usage
----
```php
ld('func/mda_glob');

$_GET['test'] = 'value';

$v = get('test'); //returns 'value'
$v = get('test2'); //returns NULL
```

Reference
----

### (mixed) get($name=false)
Takes an MDA key and retrieves it from $_GET
If $name=false the entirety of $_GET is returned

### (mixed) post($name=false)
Same as get() except with $_POST

### (mixed) req($name=false)
Same as get() except with $_REQUEST

### (mixed) server($name=false)
Same as get() except with $_SERVER

### (mixed) session($name,$value=false)
Without $value being passed functions the same as get() except with $_SESSION
When a value is passed it will set that value to the key

### (bool) session_delete()
Takes an unlimited amount of keys and will unset them

