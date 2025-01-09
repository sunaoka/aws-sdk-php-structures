<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $SegmentNum
 * @property int $SegmentationEventId
 * @property int $SegmentationTypeId
 * @property string $SegmentationUpid
 * @property int $SegmentationUpidType
 * @property int $SegmentsExpected
 * @property int $SubSegmentNum
 * @property int $SubSegmentsExpected
 */
class SegmentationDescriptor extends Shape
{
    /**
     * @param array{
     *     SegmentNum?: int,
     *     SegmentationEventId?: int,
     *     SegmentationTypeId?: int,
     *     SegmentationUpid?: string,
     *     SegmentationUpidType?: int,
     *     SegmentsExpected?: int,
     *     SubSegmentNum?: int,
     *     SubSegmentsExpected?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
