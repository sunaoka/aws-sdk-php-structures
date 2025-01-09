<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Brightness
 * @property ClipLimits $ClipLimits
 * @property 'NONE'|'FORCE_601'|'FORCE_709'|'FORCE_HDR10'|'FORCE_HLG_2020'|'FORCE_P3DCI'|'FORCE_P3D65_SDR'|'FORCE_P3D65_HDR' $ColorSpaceConversion
 * @property int $Contrast
 * @property Hdr10Metadata $Hdr10Metadata
 * @property 'PRESERVE_DETAILS'|'VIBRANT' $HdrToSdrToneMapper
 * @property int $Hue
 * @property int $MaxLuminance
 * @property 'LIMITED_RANGE_SQUEEZE'|'NONE'|'LIMITED_RANGE_CLIP' $SampleRangeConversion
 * @property int $Saturation
 * @property int $SdrReferenceWhiteLevel
 */
class ColorCorrector extends Shape
{
    /**
     * @param array{
     *     Brightness?: int,
     *     ClipLimits?: ClipLimits,
     *     ColorSpaceConversion?: 'NONE'|'FORCE_601'|'FORCE_709'|'FORCE_HDR10'|'FORCE_HLG_2020'|'FORCE_P3DCI'|'FORCE_P3D65_SDR'|'FORCE_P3D65_HDR',
     *     Contrast?: int,
     *     Hdr10Metadata?: Hdr10Metadata,
     *     HdrToSdrToneMapper?: 'PRESERVE_DETAILS'|'VIBRANT',
     *     Hue?: int,
     *     MaxLuminance?: int,
     *     SampleRangeConversion?: 'LIMITED_RANGE_SQUEEZE'|'NONE'|'LIMITED_RANGE_CLIP',
     *     Saturation?: int,
     *     SdrReferenceWhiteLevel?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
