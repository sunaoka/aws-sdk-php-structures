<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateSubscriptionDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Subscription>|null $Subscriptions
 */
class SubscriptionDefinitionVersion extends Shape
{
    /**
     * @param array{Subscriptions?: list<Subscription>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
