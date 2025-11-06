<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CSV'|'TSV'|'CLF'|'ELF'|'XLSX'|'JSON'|null $Format
 * @property int<1, max>|null $StartFromRow
 * @property bool|null $ContainsHeader
 * @property 'DOUBLE_QUOTE'|'SINGLE_QUOTE'|null $TextQualifier
 * @property string|null $Delimiter
 * @property string|null $CustomCellAddressRange
 */
class UploadSettings extends Shape
{
    /**
     * @param array{
     *     Format?: 'CSV'|'TSV'|'CLF'|'ELF'|'XLSX'|'JSON'|null,
     *     StartFromRow?: int<1, max>|null,
     *     ContainsHeader?: bool|null,
     *     TextQualifier?: 'DOUBLE_QUOTE'|'SINGLE_QUOTE'|null,
     *     Delimiter?: string|null,
     *     CustomCellAddressRange?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
