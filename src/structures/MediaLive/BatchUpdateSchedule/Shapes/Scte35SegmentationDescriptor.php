<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Scte35DeliveryRestrictions $DeliveryRestrictions
 * @property int $SegmentNum
 * @property 'SEGMENTATION_EVENT_NOT_CANCELED'|'SEGMENTATION_EVENT_CANCELED' $SegmentationCancelIndicator
 * @property int $SegmentationDuration
 * @property int $SegmentationEventId
 * @property int $SegmentationTypeId
 * @property string $SegmentationUpid
 * @property int $SegmentationUpidType
 * @property int $SegmentsExpected
 * @property int $SubSegmentNum
 * @property int $SubSegmentsExpected
 */
class Scte35SegmentationDescriptor extends Shape
{
    /**
     * @param array{
     *     DeliveryRestrictions?: Scte35DeliveryRestrictions,
     *     SegmentNum?: int,
     *     SegmentationCancelIndicator: 'SEGMENTATION_EVENT_NOT_CANCELED'|'SEGMENTATION_EVENT_CANCELED',
     *     SegmentationDuration?: int,
     *     SegmentationEventId: int,
     *     SegmentationTypeId?: int,
     *     SegmentationUpid?: string,
     *     SegmentationUpidType?: int,
     *     SegmentsExpected?: int,
     *     SubSegmentNum?: int,
     *     SubSegmentsExpected?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
