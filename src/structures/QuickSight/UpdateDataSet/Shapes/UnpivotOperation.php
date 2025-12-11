<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Alias
 * @property TransformOperationSource $Source
 * @property list<ColumnToUnpivot> $ColumnsToUnpivot
 * @property string $UnpivotedLabelColumnName
 * @property string $UnpivotedLabelColumnId
 * @property string $UnpivotedValueColumnName
 * @property string $UnpivotedValueColumnId
 */
class UnpivotOperation extends Shape
{
    /**
     * @param array{
     *     Alias: string,
     *     Source: TransformOperationSource,
     *     ColumnsToUnpivot: list<ColumnToUnpivot>,
     *     UnpivotedLabelColumnName: string,
     *     UnpivotedLabelColumnId: string,
     *     UnpivotedValueColumnName: string,
     *     UnpivotedValueColumnId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
