<?php

namespace Sunaoka\Aws\Structures\MediaConvert\Probe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $BitDepth
 * @property string|null $ChromaSubsampling
 * @property FrameRate|null $CodedFrameRate
 * @property 'ITU_709'|'UNSPECIFIED'|'RESERVED'|'ITU_470M'|'ITU_470BG'|'SMPTE_170M'|'SMPTE_240M'|'GENERIC_FILM'|'ITU_2020'|'SMPTE_428_1'|'SMPTE_431_2'|'SMPTE_EG_432_1'|'IPT'|'SMPTE_2067XYZ'|'EBU_3213_E'|'LAST'|null $ColorPrimaries
 * @property int|null $Height
 * @property string|null $Level
 * @property 'RGB'|'ITU_709'|'UNSPECIFIED'|'RESERVED'|'FCC'|'ITU_470BG'|'SMPTE_170M'|'SMPTE_240M'|'YCgCo'|'ITU_2020_NCL'|'ITU_2020_CL'|'SMPTE_2085'|'CD_NCL'|'CD_CL'|'ITU_2100ICtCp'|'IPT'|'EBU3213'|'LAST'|null $MatrixCoefficients
 * @property string|null $Profile
 * @property string|null $ScanType
 * @property 'ITU_709'|'UNSPECIFIED'|'RESERVED'|'ITU_470M'|'ITU_470BG'|'SMPTE_170M'|'SMPTE_240M'|'LINEAR'|'LOG10_2'|'LOC10_2_5'|'IEC_61966_2_4'|'ITU_1361'|'IEC_61966_2_1'|'ITU_2020_10bit'|'ITU_2020_12bit'|'SMPTE_2084'|'SMPTE_428_1'|'ARIB_B67'|'LAST'|null $TransferCharacteristics
 * @property int|null $Width
 */
class CodecMetadata extends Shape
{
    /**
     * @param array{
     *     BitDepth?: int|null,
     *     ChromaSubsampling?: string|null,
     *     CodedFrameRate?: FrameRate|null,
     *     ColorPrimaries?: 'ITU_709'|'UNSPECIFIED'|'RESERVED'|'ITU_470M'|'ITU_470BG'|'SMPTE_170M'|'SMPTE_240M'|'GENERIC_FILM'|'ITU_2020'|'SMPTE_428_1'|'SMPTE_431_2'|'SMPTE_EG_432_1'|'IPT'|'SMPTE_2067XYZ'|'EBU_3213_E'|'LAST'|null,
     *     Height?: int|null,
     *     Level?: string|null,
     *     MatrixCoefficients?: 'RGB'|'ITU_709'|'UNSPECIFIED'|'RESERVED'|'FCC'|'ITU_470BG'|'SMPTE_170M'|'SMPTE_240M'|'YCgCo'|'ITU_2020_NCL'|'ITU_2020_CL'|'SMPTE_2085'|'CD_NCL'|'CD_CL'|'ITU_2100ICtCp'|'IPT'|'EBU3213'|'LAST'|null,
     *     Profile?: string|null,
     *     ScanType?: string|null,
     *     TransferCharacteristics?: 'ITU_709'|'UNSPECIFIED'|'RESERVED'|'ITU_470M'|'ITU_470BG'|'SMPTE_170M'|'SMPTE_240M'|'LINEAR'|'LOG10_2'|'LOC10_2_5'|'IEC_61966_2_4'|'ITU_1361'|'IEC_61966_2_1'|'ITU_2020_10bit'|'ITU_2020_12bit'|'SMPTE_2084'|'SMPTE_428_1'|'ARIB_B67'|'LAST'|null,
     *     Width?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
