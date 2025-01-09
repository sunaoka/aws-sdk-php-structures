<?php

namespace Sunaoka\Aws\Structures\Deadline\GetFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $min
 * @property int $max
 */
class AcceleratorCountRange extends Shape
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
