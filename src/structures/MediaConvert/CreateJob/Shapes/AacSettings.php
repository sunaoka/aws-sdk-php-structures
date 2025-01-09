<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BROADCASTER_MIXED_AD'|'NORMAL' $AudioDescriptionBroadcasterMix
 * @property int<6000, 1024000> $Bitrate
 * @property 'LC'|'HEV1'|'HEV2' $CodecProfile
 * @property 'AD_RECEIVER_MIX'|'CODING_MODE_1_0'|'CODING_MODE_1_1'|'CODING_MODE_2_0'|'CODING_MODE_5_1' $CodingMode
 * @property 'CBR'|'VBR' $RateControlMode
 * @property 'LATM_LOAS'|'NONE' $RawFormat
 * @property int<8000, 96000> $SampleRate
 * @property 'MPEG2'|'MPEG4' $Specification
 * @property 'LOW'|'MEDIUM_LOW'|'MEDIUM_HIGH'|'HIGH' $VbrQuality
 */
class AacSettings extends Shape
{
    /**
     * @param array{
     *     AudioDescriptionBroadcasterMix?: 'BROADCASTER_MIXED_AD'|'NORMAL',
     *     Bitrate?: int<6000, 1024000>,
     *     CodecProfile?: 'LC'|'HEV1'|'HEV2',
     *     CodingMode?: 'AD_RECEIVER_MIX'|'CODING_MODE_1_0'|'CODING_MODE_1_1'|'CODING_MODE_2_0'|'CODING_MODE_5_1',
     *     RateControlMode?: 'CBR'|'VBR',
     *     RawFormat?: 'LATM_LOAS'|'NONE',
     *     SampleRate?: int<8000, 96000>,
     *     Specification?: 'MPEG2'|'MPEG4',
     *     VbrQuality?: 'LOW'|'MEDIUM_LOW'|'MEDIUM_HIGH'|'HIGH'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
