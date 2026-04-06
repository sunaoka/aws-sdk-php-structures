<?php

namespace Sunaoka\Aws\Structures\FSx\CreateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Aggregates
 * @property int<1, 200>|null $ConstituentsPerAggregate
 */
class CreateAggregateConfiguration extends Shape
{
    /**
     * @param array{
     *     Aggregates?: list<string>|null,
     *     ConstituentsPerAggregate?: int<1, 200>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
