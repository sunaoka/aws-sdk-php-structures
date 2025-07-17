<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BROADCASTER_MIXED_AD'|'NORMAL'|null $AudioDescriptionBroadcasterMix
 * @property int<6000, 1024000>|null $Bitrate
 * @property 'LC'|'HEV1'|'HEV2'|'XHE'|null $CodecProfile
 * @property 'AD_RECEIVER_MIX'|'CODING_MODE_1_0'|'CODING_MODE_1_1'|'CODING_MODE_2_0'|'CODING_MODE_5_1'|null $CodingMode
 * @property 'PROGRAM'|'ANCHOR'|null $LoudnessMeasurementMode
 * @property int<2000, 30000>|null $RapInterval
 * @property 'CBR'|'VBR'|null $RateControlMode
 * @property 'LATM_LOAS'|'NONE'|null $RawFormat
 * @property int<8000, 96000>|null $SampleRate
 * @property 'MPEG2'|'MPEG4'|null $Specification
 * @property int<6, 16>|null $TargetLoudnessRange
 * @property 'LOW'|'MEDIUM_LOW'|'MEDIUM_HIGH'|'HIGH'|null $VbrQuality
 */
class AacSettings extends Shape
{
    /**
     * @param array{
     *     AudioDescriptionBroadcasterMix?: 'BROADCASTER_MIXED_AD'|'NORMAL'|null,
     *     Bitrate?: int<6000, 1024000>|null,
     *     CodecProfile?: 'LC'|'HEV1'|'HEV2'|'XHE'|null,
     *     CodingMode?: 'AD_RECEIVER_MIX'|'CODING_MODE_1_0'|'CODING_MODE_1_1'|'CODING_MODE_2_0'|'CODING_MODE_5_1'|null,
     *     LoudnessMeasurementMode?: 'PROGRAM'|'ANCHOR'|null,
     *     RapInterval?: int<2000, 30000>|null,
     *     RateControlMode?: 'CBR'|'VBR'|null,
     *     RawFormat?: 'LATM_LOAS'|'NONE'|null,
     *     SampleRate?: int<8000, 96000>|null,
     *     Specification?: 'MPEG2'|'MPEG4'|null,
     *     TargetLoudnessRange?: int<6, 16>|null,
     *     VbrQuality?: 'LOW'|'MEDIUM_LOW'|'MEDIUM_HIGH'|'HIGH'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
