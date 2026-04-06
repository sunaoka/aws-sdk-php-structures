<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100>|null $Brightness
 * @property ClipLimits|null $ClipLimits
 * @property 'NONE'|'FORCE_601'|'FORCE_709'|'FORCE_HDR10'|'FORCE_HLG_2020'|'FORCE_P3DCI'|'FORCE_P3D65_SDR'|'FORCE_P3D65_HDR'|null $ColorSpaceConversion
 * @property int<1, 100>|null $Contrast
 * @property Hdr10Metadata|null $Hdr10Metadata
 * @property 'PRESERVE_DETAILS'|'VIBRANT'|null $HdrToSdrToneMapper
 * @property int<-180, 180>|null $Hue
 * @property int<0, 2147483647>|null $MaxLuminance
 * @property 'LIMITED_RANGE_SQUEEZE'|'NONE'|'LIMITED_RANGE_CLIP'|null $SampleRangeConversion
 * @property int<1, 100>|null $Saturation
 * @property int<100, 1000>|null $SdrReferenceWhiteLevel
 */
class ColorCorrector extends Shape
{
    /**
     * @param array{
     *     Brightness?: int<1, 100>|null,
     *     ClipLimits?: ClipLimits|null,
     *     ColorSpaceConversion?: 'NONE'|'FORCE_601'|'FORCE_709'|'FORCE_HDR10'|'FORCE_HLG_2020'|'FORCE_P3DCI'|'FORCE_P3D65_SDR'|'FORCE_P3D65_HDR'|null,
     *     Contrast?: int<1, 100>|null,
     *     Hdr10Metadata?: Hdr10Metadata|null,
     *     HdrToSdrToneMapper?: 'PRESERVE_DETAILS'|'VIBRANT'|null,
     *     Hue?: int<-180, 180>|null,
     *     MaxLuminance?: int<0, 2147483647>|null,
     *     SampleRangeConversion?: 'LIMITED_RANGE_SQUEEZE'|'NONE'|'LIMITED_RANGE_CLIP'|null,
     *     Saturation?: int<1, 100>|null,
     *     SdrReferenceWhiteLevel?: int<100, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
