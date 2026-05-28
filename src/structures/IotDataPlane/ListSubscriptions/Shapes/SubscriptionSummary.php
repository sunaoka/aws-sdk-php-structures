<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\ListSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $topicFilter
 * @property int<0, 1> $qos
 */
class SubscriptionSummary extends Shape
{
    /**
     * @param array{
     *     topicFilter: string,
     *     qos: int<0, 1>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
