<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\Przelewy24Bundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use WellCommerce\Bundle\CoreBundle\HttpKernel\AbstractWellCommerceBundle;
use WellCommerce\Bundle\PaymentBundle\DependencyInjection\Compiler;

/**
 * Class WellCommercePrzelewy24Bundle
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
final class WellCommercePrzelewy24Bundle extends AbstractWellCommerceBundle
{
    public function build(ContainerBuilder $container)
    {
    }
}
