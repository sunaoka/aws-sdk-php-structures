<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $outputNode
 */
class AntennaDemodDecodeDetails extends Shape
{
    /**
     * @param array{outputNode?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
