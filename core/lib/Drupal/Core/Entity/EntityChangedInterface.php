<?php

/**
 * @file
 * Contains \Drupal\Core\Entity\EntityChangedInterface.
 */

namespace Drupal\Core\Entity;

/**
 * Defines an interface for entity change timestamp tracking.
 *
 * This data may be useful for more precise cache invalidation (especially
 * on the client side) and concurrent editing locking.
 *
 * The entity system automatically adds in the 'EntityChanged' constraint for
 * entity types implementing this interface in order to disallow concurrent
 * editing.
 *
 * @see Drupal\Core\Entity\Plugin\Validation\Constraint\EntityChangedConstraint
 */
interface EntityChangedInterface {

  /**
   * Returns the timestamp of the last entity change.
   *
   * @return int
   *   The timestamp of the last entity save operation.
   */
  public function getChangedTime();

}
