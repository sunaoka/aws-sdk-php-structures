<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Bitrate
 * @property 'AD_RECEIVER_MIX'|'CODING_MODE_1_0'|'CODING_MODE_1_1'|'CODING_MODE_2_0'|'CODING_MODE_5_1'|null $CodingMode
 * @property 'BROADCASTER_MIXED_AD'|'NORMAL'|null $InputType
 * @property 'HEV1'|'HEV2'|'LC'|null $Profile
 * @property 'CBR'|'VBR'|null $RateControlMode
 * @property 'LATM_LOAS'|'NONE'|null $RawFormat
 * @property double|null $SampleRate
 * @property 'MPEG2'|'MPEG4'|null $Spec
 * @property 'HIGH'|'LOW'|'MEDIUM_HIGH'|'MEDIUM_LOW'|null $VbrQuality
 */
class AacSettings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: double|null,
     *     CodingMode?: 'AD_RECEIVER_MIX'|'CODING_MODE_1_0'|'CODING_MODE_1_1'|'CODING_MODE_2_0'|'CODING_MODE_5_1'|null,
     *     InputType?: 'BROADCASTER_MIXED_AD'|'NORMAL'|null,
     *     Profile?: 'HEV1'|'HEV2'|'LC'|null,
     *     RateControlMode?: 'CBR'|'VBR'|null,
     *     RawFormat?: 'LATM_LOAS'|'NONE'|null,
     *     SampleRate?: double|null,
     *     Spec?: 'MPEG2'|'MPEG4'|null,
     *     VbrQuality?: 'HIGH'|'LOW'|'MEDIUM_HIGH'|'MEDIUM_LOW'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
