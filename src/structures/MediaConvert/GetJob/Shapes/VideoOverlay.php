<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndTimecode
 * @property VideoOverlayPosition $InitialPosition
 * @property VideoOverlayInput $Input
 * @property 'ONCE'|'REPEAT' $Playback
 * @property string $StartTimecode
 * @property list<VideoOverlayTransition> $Transitions
 */
class VideoOverlay extends Shape
{
    /**
     * @param array{
     *     EndTimecode?: string,
     *     InitialPosition?: VideoOverlayPosition,
     *     Input?: VideoOverlayInput,
     *     Playback?: 'ONCE'|'REPEAT',
     *     StartTimecode?: string,
     *     Transitions?: list<VideoOverlayTransition>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
