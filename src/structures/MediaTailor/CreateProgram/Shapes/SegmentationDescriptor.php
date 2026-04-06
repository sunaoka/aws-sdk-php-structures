<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $SegmentationEventId
 * @property int|null $SegmentationUpidType
 * @property string|null $SegmentationUpid
 * @property int|null $SegmentationTypeId
 * @property int|null $SegmentNum
 * @property int|null $SegmentsExpected
 * @property int|null $SubSegmentNum
 * @property int|null $SubSegmentsExpected
 */
class SegmentationDescriptor extends Shape
{
    /**
     * @param array{
     *     SegmentationEventId?: int|null,
     *     SegmentationUpidType?: int|null,
     *     SegmentationUpid?: string|null,
     *     SegmentationTypeId?: int|null,
     *     SegmentNum?: int|null,
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
