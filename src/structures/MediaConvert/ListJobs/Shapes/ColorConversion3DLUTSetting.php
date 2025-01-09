<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FileInput
 * @property 'FOLLOW'|'REC_601'|'REC_709'|'HDR10'|'HLG_2020'|'P3DCI'|'P3D65_SDR'|'P3D65_HDR' $InputColorSpace
 * @property int $InputMasteringLuminance
 * @property 'FOLLOW'|'REC_601'|'REC_709'|'HDR10'|'HLG_2020'|'P3DCI'|'P3D65_SDR'|'P3D65_HDR' $OutputColorSpace
 * @property int $OutputMasteringLuminance
 */
class ColorConversion3DLUTSetting extends Shape
{
    /**
     * @param array{
     *     FileInput?: string,
     *     InputColorSpace?: 'FOLLOW'|'REC_601'|'REC_709'|'HDR10'|'HLG_2020'|'P3DCI'|'P3D65_SDR'|'P3D65_HDR',
     *     InputMasteringLuminance?: int,
     *     OutputColorSpace?: 'FOLLOW'|'REC_601'|'REC_709'|'HDR10'|'HLG_2020'|'P3DCI'|'P3D65_SDR'|'P3D65_HDR',
     *     OutputMasteringLuminance?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
