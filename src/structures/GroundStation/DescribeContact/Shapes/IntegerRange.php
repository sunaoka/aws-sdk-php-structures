<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maximum
 * @property int $minimum
 */
class IntegerRange extends Shape
{
    /**
     * @param array{
     *     maximum: int,
     *     minimum: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
