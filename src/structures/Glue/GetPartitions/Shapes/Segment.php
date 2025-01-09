<?php

namespace Sunaoka\Aws\Structures\Glue\GetPartitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $SegmentNumber
 * @property int<1, 10> $TotalSegments
 */
class Segment extends Shape
{
    /**
     * @param array{
     *     SegmentNumber: int<0, max>,
     *     TotalSegments: int<1, 10>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
