<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FileInput
 * @property 'FOLLOW'|'REC_601'|'REC_709'|'HDR10'|'HLG_2020'|'P3DCI'|'P3D65_SDR'|'P3D65_HDR' $InputColorSpace
 * @property int<0, 2147483647> $InputMasteringLuminance
 * @property 'FOLLOW'|'REC_601'|'REC_709'|'HDR10'|'HLG_2020'|'P3DCI'|'P3D65_SDR'|'P3D65_HDR' $OutputColorSpace
 * @property int<0, 2147483647> $OutputMasteringLuminance
 */
class ColorConversion3DLUTSetting extends Shape
{
    /**
     * @param array{
     *     FileInput?: string,
     *     InputColorSpace?: 'FOLLOW'|'REC_601'|'REC_709'|'HDR10'|'HLG_2020'|'P3DCI'|'P3D65_SDR'|'P3D65_HDR',
     *     InputMasteringLuminance?: int<0, 2147483647>,
     *     OutputColorSpace?: 'FOLLOW'|'REC_601'|'REC_709'|'HDR10'|'HLG_2020'|'P3DCI'|'P3D65_SDR'|'P3D65_HDR',
     *     OutputMasteringLuminance?: int<0, 2147483647>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
