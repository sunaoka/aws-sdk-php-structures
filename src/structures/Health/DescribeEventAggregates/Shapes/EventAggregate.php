<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventAggregates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $aggregateValue
 * @property int $count
 */
class EventAggregate extends Shape
{
    /**
     * @param array{
     *     aggregateValue?: string,
     *     count?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
