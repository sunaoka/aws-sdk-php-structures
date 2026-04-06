<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Scte35DeliveryRestrictions|null $DeliveryRestrictions
 * @property int<0, 255>|null $SegmentNum
 * @property 'SEGMENTATION_EVENT_NOT_CANCELED'|'SEGMENTATION_EVENT_CANCELED' $SegmentationCancelIndicator
 * @property int<0, 1099511627775>|null $SegmentationDuration
 * @property int<0, 4294967295> $SegmentationEventId
 * @property int<0, 255>|null $SegmentationTypeId
 * @property string|null $SegmentationUpid
 * @property int<0, 255>|null $SegmentationUpidType
 * @property int<0, 255>|null $SegmentsExpected
 * @property int<0, 255>|null $SubSegmentNum
 * @property int<0, 255>|null $SubSegmentsExpected
 */
class Scte35SegmentationDescriptor extends Shape
{
    /**
     * @param array{
     *     DeliveryRestrictions?: Scte35DeliveryRestrictions|null,
     *     SegmentNum?: int<0, 255>|null,
     *     SegmentationCancelIndicator: 'SEGMENTATION_EVENT_NOT_CANCELED'|'SEGMENTATION_EVENT_CANCELED',
     *     SegmentationDuration?: int<0, 1099511627775>|null,
     *     SegmentationEventId: int<0, 4294967295>,
     *     SegmentationTypeId?: int<0, 255>|null,
     *     SegmentationUpid?: string|null,
     *     SegmentationUpidType?: int<0, 255>|null,
     *     SegmentsExpected?: int<0, 255>|null,
     *     SubSegmentNum?: int<0, 255>|null,
     *     SubSegmentsExpected?: int<0, 255>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
