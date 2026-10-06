<?php

namespace Drupal\rng\AccessControl;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\rng\RuleInterface;

/**
 * Access controller for the rules and rule components.
 */
class EventAccessControlHandler extends EntityAccessControlHandler {