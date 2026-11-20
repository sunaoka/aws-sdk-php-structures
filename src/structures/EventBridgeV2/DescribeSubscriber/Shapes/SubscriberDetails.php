<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DescribeSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MskDetails|null $MskDetails
 */
class SubscriberDetails extends Shape
{
    /**
     * @param array{MskDetails?: MskDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
