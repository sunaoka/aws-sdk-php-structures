<?php

namespace Sunaoka\Aws\Structures\FSx\CreateSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Aggregates
 * @property int<1, 200>|null $TotalConstituents
 */
class AggregateConfiguration extends Shape
{
    /**
     * @param array{
     *     Aggregates?: list<string>|null,
     *     TotalConstituents?: int<1, 200>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
