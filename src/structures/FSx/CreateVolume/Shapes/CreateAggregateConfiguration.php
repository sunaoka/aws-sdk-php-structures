<?php

namespace Sunaoka\Aws\Structures\FSx\CreateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Aggregates
 * @property int $ConstituentsPerAggregate
 */
class CreateAggregateConfiguration extends Shape
{
    /**
     * @param array{
     *     Aggregates?: list<string>,
     *     ConstituentsPerAggregate?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
