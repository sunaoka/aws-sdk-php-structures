<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateDataflowEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property IntegerRange $portRange
 */
class RangedSocketAddress extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     portRange: IntegerRange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
