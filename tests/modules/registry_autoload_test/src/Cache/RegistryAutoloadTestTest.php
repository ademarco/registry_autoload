<?php

namespace Drupal\registry_autoload_test\Cache;

interface RegistryAutoloadTestTestInterface {
  public function x();
}

class RegistryAutoloadTestTest {
  public function __construct() {
    print "Hello Render_Cache\n";
  }
}
