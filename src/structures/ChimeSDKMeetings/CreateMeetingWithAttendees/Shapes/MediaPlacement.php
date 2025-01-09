<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\CreateMeetingWithAttendees\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AudioHostUrl
 * @property string $AudioFallbackUrl
 * @property string $SignalingUrl
 * @property string $TurnControlUrl
 * @property string $ScreenDataUrl
 * @property string $ScreenViewingUrl
 * @property string $ScreenSharingUrl
 * @property string $EventIngestionUrl
 */
class MediaPlacement extends Shape
{
    /**
     * @param array{
     *     AudioHostUrl?: string,
     *     AudioFallbackUrl?: string,
     *     SignalingUrl?: string,
     *     TurnControlUrl?: string,
     *     ScreenDataUrl?: string,
     *     ScreenViewingUrl?: string,
     *     ScreenSharingUrl?: string,
     *     EventIngestionUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
