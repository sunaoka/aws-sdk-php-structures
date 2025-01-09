<?php

namespace Sunaoka\Aws\Structures\Chime\GetMeeting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AudioHostUrl
 * @property string $AudioFallbackUrl
 * @property string $ScreenDataUrl
 * @property string $ScreenSharingUrl
 * @property string $ScreenViewingUrl
 * @property string $SignalingUrl
 * @property string $TurnControlUrl
 * @property string $EventIngestionUrl
 */
class MediaPlacement extends Shape
{
    /**
     * @param array{
     *     AudioHostUrl?: string,
     *     AudioFallbackUrl?: string,
     *     ScreenDataUrl?: string,
     *     ScreenSharingUrl?: string,
     *     ScreenViewingUrl?: string,
     *     SignalingUrl?: string,
     *     TurnControlUrl?: string,
     *     EventIngestionUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
