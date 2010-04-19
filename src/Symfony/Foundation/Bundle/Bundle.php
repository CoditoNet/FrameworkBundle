<?php

namespace Symfony\Foundation\Bundle;

use Symfony\Components\DependencyInjection\ContainerInterface;

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * Bundle.
 *
 * @package    Symfony
 * @subpackage Foundation
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 */
abstract class Bundle implements BundleInterface
{
  public function buildContainer(ContainerInterface $container)
  {
  }

  public function boot(ContainerInterface $container)
  {
  }

  public function shutdown(ContainerInterface $container)
  {
  }
}
