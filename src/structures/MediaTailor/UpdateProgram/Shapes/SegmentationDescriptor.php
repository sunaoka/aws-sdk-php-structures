<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $SegmentNum
 * @property int|null $SegmentationEventId
 * @property int|null $SegmentationTypeId
 * @property string|null $SegmentationUpid
 * @property int|null $SegmentationUpidType
 * @property int|null $SegmentsExpected
 * @property int|null $SubSegmentNum
 * @property int|null $SubSegmentsExpected
 */
class SegmentationDescriptor extends Shape
{
    /**
     * @param array{
     *     SegmentNum?: int|null,
     *     SegmentationEventId?: int|null,
     *     SegmentationTypeId?: int|null,
     *     SegmentationUpid?: string|null,
     *     SegmentationUpidType?: int|null,
     *     SegmentsExpected?: int|null,
     *     SubSegmentNum?: int|null,
     *     SubSegmentsExpected?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
