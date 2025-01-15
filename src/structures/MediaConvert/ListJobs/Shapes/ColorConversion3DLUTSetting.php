<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FileInput
 * @property 'FOLLOW'|'REC_601'|'REC_709'|'HDR10'|'HLG_2020'|'P3DCI'|'P3D65_SDR'|'P3D65_HDR'|null $InputColorSpace
 * @property int<0, 2147483647>|null $InputMasteringLuminance
 * @property 'FOLLOW'|'REC_601'|'REC_709'|'HDR10'|'HLG_2020'|'P3DCI'|'P3D65_SDR'|'P3D65_HDR'|null $OutputColorSpace
 * @property int<0, 2147483647>|null $OutputMasteringLuminance
 */
class ColorConversion3DLUTSetting extends Shape
{
    /**
     * @param array{
     *     FileInput?: string|null,
     *     InputColorSpace?: 'FOLLOW'|'REC_601'|'REC_709'|'HDR10'|'HLG_2020'|'P3DCI'|'P3D65_SDR'|'P3D65_HDR'|null,
     *     InputMasteringLuminance?: int<0, 2147483647>|null,
     *     OutputColorSpace?: 'FOLLOW'|'REC_601'|'REC_709'|'HDR10'|'HLG_2020'|'P3DCI'|'P3D65_SDR'|'P3D65_HDR'|null,
     *     OutputMasteringLuminance?: int<0, 2147483647>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
