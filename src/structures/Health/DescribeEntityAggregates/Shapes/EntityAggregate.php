<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEntityAggregates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventArn
 * @property int $count
 * @property array<'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED', int> $statuses
 */
class EntityAggregate extends Shape
{
    /**
     * @param array{
     *     eventArn?: string,
     *     count?: int,
     *     statuses?: array<'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED', int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
