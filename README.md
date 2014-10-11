Simple module to add PSR-0 and PSR-4 support to the Drupal 7 Core registry.

### INSTALL

- Enable the module
- Change your .info files and add registry\_autoload[] = psr-0 or psr-4 key
- Put your files in src/ for PSR-4 and lib/ for PSR-0.
- DONE

Alternatively to the registry\_autoload key use:

  registry\_autoload\_files[] = filename

to specify all your files manually and avoid the file system scan.

It is still adviced to provide files in PSR-0 or PSR-4 format, so that you can switch to another autoloader later.

### FORMAT

Add the following keys to your modules .info file to search the respective subdir for .php files:

sample.info:

registry\_autoload[] = psr-0
registry\_autoload[] = psr-4

PSR-0 will by default search the lib/ subdirectory of your module and the convention is to repeat the full namespace, e.g.

lib/Drupal/Core/Cache/CacheableInterface.php

with:

namespace Drupal\Core\Cache;

PSR-4 will by default search the src/ subdirectory of your module and the convention is to only repeat the namespace after Drupal/[your\_module]:

src/Cache/CacheableInterface.php

with:

namespace Drupal\[your\_module]\Cache;

### AVOID FILE SYSTEM SCAN 

If you want to avoid the static file\_scan\_directory use:

  registry\_autoload\_files[] = filename

The psr-0 and psr-4 are just shortcuts if you want to register all your files automatically.

### RELATED MODULES

xautoload is a related module.

The difference is that this statically scans all files during the registry rebuild to register the files, while xautoload does it dynamically during runtime based on the class name.

However this does only need the D7 core registry and only changes the registry in a way to add namespaced files, which core could support, too.
