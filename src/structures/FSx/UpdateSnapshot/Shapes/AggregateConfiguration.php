<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Aggregates
 * @property int<1, 200> $TotalConstituents
 */
class AggregateConfiguration extends Shape
{
    /**
     * @param array{
     *     Aggregates?: list<string>,
     *     TotalConstituents?: int<1, 200>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
