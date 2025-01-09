<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredPartitionsMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $SegmentNumber
 * @property int $TotalSegments
 */
class Segment extends Shape
{
    /**
     * @param array{
     *     SegmentNumber: int,
     *     TotalSegments: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
