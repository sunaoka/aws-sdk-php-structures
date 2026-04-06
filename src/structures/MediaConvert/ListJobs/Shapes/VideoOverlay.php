<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VideoOverlayCrop|null $Crop
 * @property string|null $EndTimecode
 * @property VideoOverlayPosition|null $InitialPosition
 * @property VideoOverlayInput|null $Input
 * @property 'ONCE'|'REPEAT'|null $Playback
 * @property string|null $StartTimecode
 * @property list<VideoOverlayTransition>|null $Transitions
 */
class VideoOverlay extends Shape
{
    /**
     * @param array{
     *     Crop?: VideoOverlayCrop|null,
     *     EndTimecode?: string|null,
     *     InitialPosition?: VideoOverlayPosition|null,
     *     Input?: VideoOverlayInput|null,
     *     Playback?: 'ONCE'|'REPEAT'|null,
     *     StartTimecode?: string|null,
     *     Transitions?: list<VideoOverlayTransition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
