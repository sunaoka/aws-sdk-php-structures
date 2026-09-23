<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NEAREST_IDRFRAME'|'NEAREST_IFRAME'|null $FrameControl
 * @property int<1, 100>|null $GopsPerSegment
 * @property 'AUTO'|'DURATION_BASED'|'GOP_COUNT'|null $SegmentationMode
 * @property 'AUTO'|'REMUX_ALL'|null $VideoSelectorMode
 */
class PassthroughSettings extends Shape
{
    /**
     * @param array{
     *     FrameControl?: 'NEAREST_IDRFRAME'|'NEAREST_IFRAME'|null,
     *     GopsPerSegment?: int<1, 100>|null,
     *     SegmentationMode?: 'AUTO'|'DURATION_BASED'|'GOP_COUNT'|null,
     *     VideoSelectorMode?: 'AUTO'|'REMUX_ALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
