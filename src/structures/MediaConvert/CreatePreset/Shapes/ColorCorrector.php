<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100> $Brightness
 * @property ClipLimits $ClipLimits
 * @property 'NONE'|'FORCE_601'|'FORCE_709'|'FORCE_HDR10'|'FORCE_HLG_2020'|'FORCE_P3DCI'|'FORCE_P3D65_SDR'|'FORCE_P3D65_HDR' $ColorSpaceConversion
 * @property int<1, 100> $Contrast
 * @property Hdr10Metadata $Hdr10Metadata
 * @property 'PRESERVE_DETAILS'|'VIBRANT' $HdrToSdrToneMapper
 * @property int<-180, 180> $Hue
 * @property int<0, 2147483647> $MaxLuminance
 * @property 'LIMITED_RANGE_SQUEEZE'|'NONE'|'LIMITED_RANGE_CLIP' $SampleRangeConversion
 * @property int<1, 100> $Saturation
 * @property int<100, 1000> $SdrReferenceWhiteLevel
 */
class ColorCorrector extends Shape
{
    /**
     * @param array{
     *     Brightness?: int<1, 100>,
     *     ClipLimits?: ClipLimits,
     *     ColorSpaceConversion?: 'NONE'|'FORCE_601'|'FORCE_709'|'FORCE_HDR10'|'FORCE_HLG_2020'|'FORCE_P3DCI'|'FORCE_P3D65_SDR'|'FORCE_P3D65_HDR',
     *     Contrast?: int<1, 100>,
     *     Hdr10Metadata?: Hdr10Metadata,
     *     HdrToSdrToneMapper?: 'PRESERVE_DETAILS'|'VIBRANT',
     *     Hue?: int<-180, 180>,
     *     MaxLuminance?: int<0, 2147483647>,
     *     SampleRangeConversion?: 'LIMITED_RANGE_SQUEEZE'|'NONE'|'LIMITED_RANGE_CLIP',
     *     Saturation?: int<1, 100>,
     *     SdrReferenceWhiteLevel?: int<100, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
