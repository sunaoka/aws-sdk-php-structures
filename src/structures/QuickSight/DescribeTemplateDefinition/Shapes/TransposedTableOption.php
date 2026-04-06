<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 9999>|null $ColumnIndex
 * @property string|null $ColumnWidth
 * @property 'ROW_HEADER_COLUMN'|'VALUE_COLUMN' $ColumnType
 */
class TransposedTableOption extends Shape
{
    /**
     * @param array{
     *     ColumnIndex?: int<0, 9999>|null,
     *     ColumnWidth?: string|null,
     *     ColumnType: 'ROW_HEADER_COLUMN'|'VALUE_COLUMN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
