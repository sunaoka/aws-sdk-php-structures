<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISCARD'|'REMAP_TO_LUMA' $AlphaBehavior
 * @property 'FOLLOW'|'REC_601'|'REC_709'|'HDR10'|'HLG_2020'|'P3DCI'|'P3D65_SDR'|'P3D65_HDR' $ColorSpace
 * @property 'FORCE'|'FALLBACK' $ColorSpaceUsage
 * @property 'NONE'|'USE_MDPM' $EmbeddedTimecodeOverride
 * @property Hdr10Metadata $Hdr10Metadata
 * @property int<0, 2147483647> $MaxLuminance
 * @property 'DISABLED'|'BLACK' $PadVideo
 * @property int<1, 2147483647> $Pid
 * @property int<-2147483648, 2147483647> $ProgramNumber
 * @property 'DEGREE_0'|'DEGREES_90'|'DEGREES_180'|'DEGREES_270'|'AUTO' $Rotate
 * @property 'FOLLOW'|'FULL_RANGE'|'LIMITED_RANGE' $SampleRange
 */
class VideoSelector extends Shape
{
    /**
     * @param array{
     *     AlphaBehavior?: 'DISCARD'|'REMAP_TO_LUMA',
     *     ColorSpace?: 'FOLLOW'|'REC_601'|'REC_709'|'HDR10'|'HLG_2020'|'P3DCI'|'P3D65_SDR'|'P3D65_HDR',
     *     ColorSpaceUsage?: 'FORCE'|'FALLBACK',
     *     EmbeddedTimecodeOverride?: 'NONE'|'USE_MDPM',
     *     Hdr10Metadata?: Hdr10Metadata,
     *     MaxLuminance?: int<0, 2147483647>,
     *     PadVideo?: 'DISABLED'|'BLACK',
     *     Pid?: int<1, 2147483647>,
     *     ProgramNumber?: int<-2147483648, 2147483647>,
     *     Rotate?: 'DEGREE_0'|'DEGREES_90'|'DEGREES_180'|'DEGREES_270'|'AUTO',
     *     SampleRange?: 'FOLLOW'|'FULL_RANGE'|'LIMITED_RANGE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
