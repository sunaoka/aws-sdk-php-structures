<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Bitrate
 * @property 'AD_RECEIVER_MIX'|'CODING_MODE_1_0'|'CODING_MODE_1_1'|'CODING_MODE_2_0'|'CODING_MODE_5_1' $CodingMode
 * @property 'BROADCASTER_MIXED_AD'|'NORMAL' $InputType
 * @property 'HEV1'|'HEV2'|'LC' $Profile
 * @property 'CBR'|'VBR' $RateControlMode
 * @property 'LATM_LOAS'|'NONE' $RawFormat
 * @property double $SampleRate
 * @property 'MPEG2'|'MPEG4' $Spec
 * @property 'HIGH'|'LOW'|'MEDIUM_HIGH'|'MEDIUM_LOW' $VbrQuality
 */
class AacSettings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: double,
     *     CodingMode?: 'AD_RECEIVER_MIX'|'CODING_MODE_1_0'|'CODING_MODE_1_1'|'CODING_MODE_2_0'|'CODING_MODE_5_1',
     *     InputType?: 'BROADCASTER_MIXED_AD'|'NORMAL',
     *     Profile?: 'HEV1'|'HEV2'|'LC',
     *     RateControlMode?: 'CBR'|'VBR',
     *     RawFormat?: 'LATM_LOAS'|'NONE',
     *     SampleRate?: double,
     *     Spec?: 'MPEG2'|'MPEG4',
     *     VbrQuality?: 'HIGH'|'LOW'|'MEDIUM_HIGH'|'MEDIUM_LOW'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
