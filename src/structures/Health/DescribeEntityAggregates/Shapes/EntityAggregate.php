<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEntityAggregates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $eventArn
 * @property int|null $count
 * @property array<'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED', int>|null $statuses
 */
class EntityAggregate extends Shape
{
    /**
     * @param array{
     *     eventArn?: string|null,
     *     count?: int|null,
     *     statuses?: array<'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED', int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
