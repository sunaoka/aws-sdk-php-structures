<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FrameCaptureSettings|null $FrameCaptureSettings
 * @property H264Settings|null $H264Settings
 * @property H265Settings|null $H265Settings
 * @property Mpeg2Settings|null $Mpeg2Settings
 * @property Av1Settings|null $Av1Settings
 */
class VideoCodecSettings extends Shape
{
    /**
     * @param array{
     *     FrameCaptureSettings?: FrameCaptureSettings|null,
     *     H264Settings?: H264Settings|null,
     *     H265Settings?: H265Settings|null,
     *     Mpeg2Settings?: Mpeg2Settings|null,
     *     Av1Settings?: Av1Settings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
