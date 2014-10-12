<?php
/**
 * @file
 * Tests that custom namespace classes get registered correctly.
 */

namespace custom\some\name\space;

class RegistryAutoloadTestTest {
  public function __construct() {
    print "Hello custom some namespace\n";
  }
}
