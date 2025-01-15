<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Av1Settings|null $Av1Settings
 * @property AvcIntraSettings|null $AvcIntraSettings
 * @property 'AV1'|'AVC_INTRA'|'FRAME_CAPTURE'|'H_264'|'H_265'|'MPEG2'|'PASSTHROUGH'|'PRORES'|'UNCOMPRESSED'|'VC3'|'VP8'|'VP9'|'XAVC'|null $Codec
 * @property FrameCaptureSettings|null $FrameCaptureSettings
 * @property H264Settings|null $H264Settings
 * @property H265Settings|null $H265Settings
 * @property Mpeg2Settings|null $Mpeg2Settings
 * @property ProresSettings|null $ProresSettings
 * @property UncompressedSettings|null $UncompressedSettings
 * @property Vc3Settings|null $Vc3Settings
 * @property Vp8Settings|null $Vp8Settings
 * @property Vp9Settings|null $Vp9Settings
 * @property XavcSettings|null $XavcSettings
 */
class VideoCodecSettings extends Shape
{
    /**
     * @param array{
     *     Av1Settings?: Av1Settings|null,
     *     AvcIntraSettings?: AvcIntraSettings|null,
     *     Codec?: 'AV1'|'AVC_INTRA'|'FRAME_CAPTURE'|'H_264'|'H_265'|'MPEG2'|'PASSTHROUGH'|'PRORES'|'UNCOMPRESSED'|'VC3'|'VP8'|'VP9'|'XAVC'|null,
     *     FrameCaptureSettings?: FrameCaptureSettings|null,
     *     H264Settings?: H264Settings|null,
     *     H265Settings?: H265Settings|null,
     *     Mpeg2Settings?: Mpeg2Settings|null,
     *     ProresSettings?: ProresSettings|null,
     *     UncompressedSettings?: UncompressedSettings|null,
     *     Vc3Settings?: Vc3Settings|null,
     *     Vp8Settings?: Vp8Settings|null,
     *     Vp9Settings?: Vp9Settings|null,
     *     XavcSettings?: XavcSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
