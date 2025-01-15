<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventAggregates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $aggregateValue
 * @property int|null $count
 */
class EventAggregate extends Shape
{
    /**
     * @param array{
     *     aggregateValue?: string|null,
     *     count?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
