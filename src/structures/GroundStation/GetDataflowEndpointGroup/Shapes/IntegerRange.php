<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetDataflowEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $minimum
 * @property int $maximum
 */
class IntegerRange extends Shape
{
    /**
     * @param array{
     *     minimum: int,
     *     maximum: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
