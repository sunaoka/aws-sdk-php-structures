<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Scte35DeliveryRestrictions $DeliveryRestrictions
 * @property int<0, 255> $SegmentNum
 * @property 'SEGMENTATION_EVENT_NOT_CANCELED'|'SEGMENTATION_EVENT_CANCELED' $SegmentationCancelIndicator
 * @property int<0, 1099511627775> $SegmentationDuration
 * @property int<0, 4294967295> $SegmentationEventId
 * @property int<0, 255> $SegmentationTypeId
 * @property string $SegmentationUpid
 * @property int<0, 255> $SegmentationUpidType
 * @property int<0, 255> $SegmentsExpected
 * @property int<0, 255> $SubSegmentNum
 * @property int<0, 255> $SubSegmentsExpected
 */
class Scte35SegmentationDescriptor extends Shape
{
    /**
     * @param array{
     *     DeliveryRestrictions?: Scte35DeliveryRestrictions,
     *     SegmentNum?: int<0, 255>,
     *     SegmentationCancelIndicator: 'SEGMENTATION_EVENT_NOT_CANCELED'|'SEGMENTATION_EVENT_CANCELED',
     *     SegmentationDuration?: int<0, 1099511627775>,
     *     SegmentationEventId: int<0, 4294967295>,
     *     SegmentationTypeId?: int<0, 255>,
     *     SegmentationUpid?: string,
     *     SegmentationUpidType?: int<0, 255>,
     *     SegmentsExpected?: int<0, 255>,
     *     SubSegmentNum?: int<0, 255>,
     *     SubSegmentsExpected?: int<0, 255>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
