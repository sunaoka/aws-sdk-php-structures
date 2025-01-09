<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FrameCaptureSettings $FrameCaptureSettings
 * @property H264Settings $H264Settings
 * @property H265Settings $H265Settings
 * @property Mpeg2Settings $Mpeg2Settings
 * @property Av1Settings $Av1Settings
 */
class VideoCodecSettings extends Shape
{
    /**
     * @param array{
     *     FrameCaptureSettings?: FrameCaptureSettings,
     *     H264Settings?: H264Settings,
     *     H265Settings?: H265Settings,
     *     Mpeg2Settings?: Mpeg2Settings,
     *     Av1Settings?: Av1Settings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
