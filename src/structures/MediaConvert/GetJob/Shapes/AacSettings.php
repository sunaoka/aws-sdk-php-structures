<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BROADCASTER_MIXED_AD'|'NORMAL'|null $AudioDescriptionBroadcasterMix
 * @property int<6000, 1024000>|null $Bitrate
 * @property 'LC'|'HEV1'|'HEV2'|null $CodecProfile
 * @property 'AD_RECEIVER_MIX'|'CODING_MODE_1_0'|'CODING_MODE_1_1'|'CODING_MODE_2_0'|'CODING_MODE_5_1'|null $CodingMode
 * @property 'CBR'|'VBR'|null $RateControlMode
 * @property 'LATM_LOAS'|'NONE'|null $RawFormat
 * @property int<8000, 96000>|null $SampleRate
 * @property 'MPEG2'|'MPEG4'|null $Specification
 * @property 'LOW'|'MEDIUM_LOW'|'MEDIUM_HIGH'|'HIGH'|null $VbrQuality
 */
class AacSettings extends Shape
{
    /**
     * @param array{
     *     AudioDescriptionBroadcasterMix?: 'BROADCASTER_MIXED_AD'|'NORMAL'|null,
     *     Bitrate?: int<6000, 1024000>|null,
     *     CodecProfile?: 'LC'|'HEV1'|'HEV2'|null,
     *     CodingMode?: 'AD_RECEIVER_MIX'|'CODING_MODE_1_0'|'CODING_MODE_1_1'|'CODING_MODE_2_0'|'CODING_MODE_5_1'|null,
     *     RateControlMode?: 'CBR'|'VBR'|null,
     *     RawFormat?: 'LATM_LOAS'|'NONE'|null,
     *     SampleRate?: int<8000, 96000>|null,
     *     Specification?: 'MPEG2'|'MPEG4'|null,
     *     VbrQuality?: 'LOW'|'MEDIUM_LOW'|'MEDIUM_HIGH'|'HIGH'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
