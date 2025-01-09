<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $min
 * @property int $max
 */
class VCpuCountRange extends Shape
{
    /**
     * @param array{
     *     min: int,
     *     max?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
