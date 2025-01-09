<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetSubscriptionDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Subscription> $Subscriptions
 */
class SubscriptionDefinitionVersion extends Shape
{
    /**
     * @param array{Subscriptions?: list<Subscription>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
