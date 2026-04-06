<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $identifier
 */
class SubscribedGroupInput extends Shape
{
    /**
     * @param array{identifier?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
