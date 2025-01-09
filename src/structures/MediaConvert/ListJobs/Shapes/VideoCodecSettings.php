<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Av1Settings $Av1Settings
 * @property AvcIntraSettings $AvcIntraSettings
 * @property 'AV1'|'AVC_INTRA'|'FRAME_CAPTURE'|'H_264'|'H_265'|'MPEG2'|'PASSTHROUGH'|'PRORES'|'UNCOMPRESSED'|'VC3'|'VP8'|'VP9'|'XAVC' $Codec
 * @property FrameCaptureSettings $FrameCaptureSettings
 * @property H264Settings $H264Settings
 * @property H265Settings $H265Settings
 * @property Mpeg2Settings $Mpeg2Settings
 * @property ProresSettings $ProresSettings
 * @property UncompressedSettings $UncompressedSettings
 * @property Vc3Settings $Vc3Settings
 * @property Vp8Settings $Vp8Settings
 * @property Vp9Settings $Vp9Settings
 * @property XavcSettings $XavcSettings
 */
class VideoCodecSettings extends Shape
{
    /**
     * @param array{
     *     Av1Settings?: Av1Settings,
     *     AvcIntraSettings?: AvcIntraSettings,
     *     Codec?: 'AV1'|'AVC_INTRA'|'FRAME_CAPTURE'|'H_264'|'H_265'|'MPEG2'|'PASSTHROUGH'|'PRORES'|'UNCOMPRESSED'|'VC3'|'VP8'|'VP9'|'XAVC',
     *     FrameCaptureSettings?: FrameCaptureSettings,
     *     H264Settings?: H264Settings,
     *     H265Settings?: H265Settings,
     *     Mpeg2Settings?: Mpeg2Settings,
     *     ProresSettings?: ProresSettings,
     *     UncompressedSettings?: UncompressedSettings,
     *     Vc3Settings?: Vc3Settings,
     *     Vp8Settings?: Vp8Settings,
     *     Vp9Settings?: Vp9Settings,
     *     XavcSettings?: XavcSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
