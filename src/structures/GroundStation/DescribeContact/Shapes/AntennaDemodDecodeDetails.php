<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $outputNode
 */
class AntennaDemodDecodeDetails extends Shape
{
    /**
     * @param array{outputNode?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
