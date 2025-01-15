<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListJourneys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventCondition|null $EventCondition
 * @property SegmentCondition|null $SegmentCondition
 * @property SegmentDimensions|null $SegmentDimensions
 */
class SimpleCondition extends Shape
{
    /**
     * @param array{
     *     EventCondition?: EventCondition|null,
     *     SegmentCondition?: SegmentCondition|null,
     *     SegmentDimensions?: SegmentDimensions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
