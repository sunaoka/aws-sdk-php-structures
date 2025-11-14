<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Scte35DeliveryRestrictions|null $DeliveryRestrictions
 * @property int|null $SegmentNum
 * @property 'SEGMENTATION_EVENT_NOT_CANCELED'|'SEGMENTATION_EVENT_CANCELED' $SegmentationCancelIndicator
 * @property int|null $SegmentationDuration
 * @property int $SegmentationEventId
 * @property int|null $SegmentationTypeId
 * @property string|null $SegmentationUpid
 * @property int|null $SegmentationUpidType
 * @property int|null $SegmentsExpected
 * @property int|null $SubSegmentNum
 * @property int|null $SubSegmentsExpected
 */
class Scte35SegmentationDescriptor extends Shape
{
    /**
     * @param array{
     *     DeliveryRestrictions?: Scte35DeliveryRestrictions|null,
     *     SegmentNum?: int|null,
     *     SegmentationCancelIndicator: 'SEGMENTATION_EVENT_NOT_CANCELED'|'SEGMENTATION_EVENT_CANCELED',
     *     SegmentationDuration?: int|null,
     *     SegmentationEventId: int,
     *     SegmentationTypeId?: int|null,
     *     SegmentationUpid?: string|null,
     *     SegmentationUpidType?: int|null,
     *     SegmentsExpected?: int|null,
     *     SubSegmentNum?: int|null,
     *     SubSegmentsExpected?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
