<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventCondition $EventCondition
 * @property SegmentCondition $SegmentCondition
 * @property SegmentDimensions $SegmentDimensions
 */
class SimpleCondition extends Shape
{
    /**
     * @param array{
     *     EventCondition?: EventCondition,
     *     SegmentCondition?: SegmentCondition,
     *     SegmentDimensions?: SegmentDimensions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
