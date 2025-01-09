<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CSV'|'TSV'|'CLF'|'ELF'|'XLSX'|'JSON' $Format
 * @property int $StartFromRow
 * @property bool $ContainsHeader
 * @property 'DOUBLE_QUOTE'|'SINGLE_QUOTE' $TextQualifier
 * @property string $Delimiter
 */
class UploadSettings extends Shape
{
    /**
     * @param array{
     *     Format?: 'CSV'|'TSV'|'CLF'|'ELF'|'XLSX'|'JSON',
     *     StartFromRow?: int,
     *     ContainsHeader?: bool,
     *     TextQualifier?: 'DOUBLE_QUOTE'|'SINGLE_QUOTE',
     *     Delimiter?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
