<?php
/**
 * @file
 * Tests that non namespaced classes get registered correctly.
 */

class RegistryAutoloadTestTest {
  public function __construct() {
    print "Hello No Namespace\n";
  }
}
