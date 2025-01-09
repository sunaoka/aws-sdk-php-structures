<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Scte35SegmentationDescriptor $SegmentationDescriptorScte35DescriptorSettings
 */
class Scte35DescriptorSettings extends Shape
{
    /**
     * @param array{SegmentationDescriptorScte35DescriptorSettings: Scte35SegmentationDescriptor} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
