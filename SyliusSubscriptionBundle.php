<?php

/*
* This file is part of the Sylius package.
*
* (c) Paweł Jędrzejewski
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Sylius\Bundle\SubscriptionBundle;

use Sylius\Bundle\ResourceBundle\AbstractResourceBundle;
use Sylius\Bundle\ResourceBundle\SyliusResourceBundle;

class SyliusSubscriptionBundle extends AbstractResourceBundle
{
    /**
     * {@inheritdoc}
     */
    public function getSupportedDrivers() : array
    {
        return array(
            SyliusResourceBundle::DRIVER_DOCTRINE_ORM
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function getBundlePrefix() : string
    {
        return 'sylius_subscription';
    }

    /**
     * {@inheritdoc}
     */
    protected function getModelInterfaces() : array
    {
        return array(
            'Sylius\Component\Subscription\Model\SubscriptionInterface' => 'sylius.model.subscription.class',
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function getModelNamespace() : ?string
    {
        return 'Sylius\Component\Subscription\Model';
    }
}
