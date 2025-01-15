<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegmentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecencyDimension|null $Recency
 */
class SegmentBehaviors extends Shape
{
    /**
     * @param array{Recency?: RecencyDimension|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
