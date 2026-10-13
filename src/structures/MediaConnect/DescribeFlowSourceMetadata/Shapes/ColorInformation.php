<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlowSourceMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BT709'|'BT470M'|'BT470BG'|'BT601'|'SMPTE240M'|'GENERIC_FILM'|'BT2020'|'SMPTE428'|'SMPTE431'|'SMPTE432'|null $Colorimetry
 * @property 'BT709'|'BT470M'|'BT470BG'|'BT601'|'SMPTE240M'|'LINEAR'|'LOG100'|'LOG316'|'IEC61966_2_4'|'BT1361_ECG'|'IEC61966_2_1'|'BT2020_10'|'BT2020_12'|'BT2100_PQ'|'SMPTE428'|'BT2100_HLG'|null $TransferCharacteristics
 * @property 'IDENTITY'|'BT709'|'FCC'|'BT470BG'|'BT601'|'SMPTE240M'|'YCGCO'|'BT2020_NCL'|'BT2020_CL'|'SMPTE2085'|'CHROMATICITY_DERIVED_NCL'|'CHROMATICITY_DERIVED_CL'|'BT2100_ICTCP'|'IPT_C2'|null $MatrixCoefficients
 */
class ColorInformation extends Shape
{
    /**
     * @param array{
     *     Colorimetry?: 'BT709'|'BT470M'|'BT470BG'|'BT601'|'SMPTE240M'|'GENERIC_FILM'|'BT2020'|'SMPTE428'|'SMPTE431'|'SMPTE432'|null,
     *     TransferCharacteristics?: 'BT709'|'BT470M'|'BT470BG'|'BT601'|'SMPTE240M'|'LINEAR'|'LOG100'|'LOG316'|'IEC61966_2_4'|'BT1361_ECG'|'IEC61966_2_1'|'BT2020_10'|'BT2020_12'|'BT2100_PQ'|'SMPTE428'|'BT2100_HLG'|null,
     *     MatrixCoefficients?: 'IDENTITY'|'BT709'|'FCC'|'BT470BG'|'BT601'|'SMPTE240M'|'YCGCO'|'BT2020_NCL'|'BT2020_CL'|'SMPTE2085'|'CHROMATICITY_DERIVED_NCL'|'CHROMATICITY_DERIVED_CL'|'BT2100_ICTCP'|'IPT_C2'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
