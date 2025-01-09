<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AvailSettings $AvailSettings
 * @property 'ALL_OUTPUT_GROUPS'|'SCTE35_ENABLED_OUTPUT_GROUPS' $Scte35SegmentationScope
 */
class AvailConfiguration extends Shape
{
    /**
     * @param array{
     *     AvailSettings?: AvailSettings,
     *     Scte35SegmentationScope?: 'ALL_OUTPUT_GROUPS'|'SCTE35_ENABLED_OUTPUT_GROUPS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
