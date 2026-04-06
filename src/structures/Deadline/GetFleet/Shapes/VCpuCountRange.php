<?php

namespace Sunaoka\Aws\Structures\Deadline\GetFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10000> $min
 * @property int<1, 10000>|null $max
 */
class VCpuCountRange extends Shape
{
    /**
     * @param array{
     *     min: int<1, 10000>,
     *     max?: int<1, 10000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
