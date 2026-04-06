<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10000>|null $max
 * @property int<1, 10000> $min
 */
class VCpuCountRange extends Shape
{
    /**
     * @param array{
     *     max?: int<1, 10000>|null,
     *     min: int<1, 10000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
