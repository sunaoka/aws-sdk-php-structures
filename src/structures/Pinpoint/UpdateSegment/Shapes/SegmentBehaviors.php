<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateSegment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecencyDimension $Recency
 */
class SegmentBehaviors extends Shape
{
    /**
     * @param array{Recency?: RecencyDimension} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
