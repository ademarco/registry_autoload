<?php
/**
 * @file
 * Tests that PSR-4 namespaced classes and interfaces get registered correctly.
 */

namespace Drupal\registry_autoload_test\Cache;

interface RegistryAutoloadTestTestInterface {
  /**
   * Dummy function x to test interfaces.
   */
  public function x();
}

class RegistryAutoloadTestTest {
  /**
   * Constructs a RegistryAutoloadTestTest object.
   */
  public function __construct() {
    print "Hello Render_Cache\n";
  }
}
