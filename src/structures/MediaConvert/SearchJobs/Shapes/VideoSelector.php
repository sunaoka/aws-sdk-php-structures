<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISCARD'|'REMAP_TO_LUMA'|null $AlphaBehavior
 * @property 'FOLLOW'|'REC_601'|'REC_709'|'HDR10'|'HLG_2020'|'P3DCI'|'P3D65_SDR'|'P3D65_HDR'|null $ColorSpace
 * @property 'FORCE'|'FALLBACK'|null $ColorSpaceUsage
 * @property 'NONE'|'USE_MDPM'|null $EmbeddedTimecodeOverride
 * @property Hdr10Metadata|null $Hdr10Metadata
 * @property int<0, 2147483647>|null $MaxLuminance
 * @property 'DISABLED'|'BLACK'|null $PadVideo
 * @property int<1, 2147483647>|null $Pid
 * @property int<-2147483648, 2147483647>|null $ProgramNumber
 * @property 'DEGREE_0'|'DEGREES_90'|'DEGREES_180'|'DEGREES_270'|'AUTO'|null $Rotate
 * @property 'FOLLOW'|'FULL_RANGE'|'LIMITED_RANGE'|null $SampleRange
 */
class VideoSelector extends Shape
{
    /**
     * @param array{
     *     AlphaBehavior?: 'DISCARD'|'REMAP_TO_LUMA'|null,
     *     ColorSpace?: 'FOLLOW'|'REC_601'|'REC_709'|'HDR10'|'HLG_2020'|'P3DCI'|'P3D65_SDR'|'P3D65_HDR'|null,
     *     ColorSpaceUsage?: 'FORCE'|'FALLBACK'|null,
     *     EmbeddedTimecodeOverride?: 'NONE'|'USE_MDPM'|null,
     *     Hdr10Metadata?: Hdr10Metadata|null,
     *     MaxLuminance?: int<0, 2147483647>|null,
     *     PadVideo?: 'DISABLED'|'BLACK'|null,
     *     Pid?: int<1, 2147483647>|null,
     *     ProgramNumber?: int<-2147483648, 2147483647>|null,
     *     Rotate?: 'DEGREE_0'|'DEGREES_90'|'DEGREES_180'|'DEGREES_270'|'AUTO'|null,
     *     SampleRange?: 'FOLLOW'|'FULL_RANGE'|'LIMITED_RANGE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
