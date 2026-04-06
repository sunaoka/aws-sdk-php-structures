<?php

namespace Sunaoka\Aws\Structures\DataZone\GetSubscriptionRequestDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 */
class SubscribedGroup extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
