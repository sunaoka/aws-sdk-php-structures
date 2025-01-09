<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Step> $Steps
 * @property \Aws\Api\DateTimeResult $ActivationTimestamp
 * @property int $Index
 */
class RoutingCriteria extends Shape
{
    /**
     * @param array{
     *     Steps?: list<Step>,
     *     ActivationTimestamp?: \Aws\Api\DateTimeResult,
     *     Index?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
