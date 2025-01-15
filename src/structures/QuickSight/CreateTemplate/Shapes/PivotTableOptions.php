<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ROW'|'COLUMN'|null $MetricPlacement
 * @property 'HIDDEN'|'VISIBLE'|null $SingleMetricVisibility
 * @property 'HIDDEN'|'VISIBLE'|null $ColumnNamesVisibility
 * @property 'HIDDEN'|'VISIBLE'|null $ToggleButtonsVisibility
 * @property TableCellStyle|null $ColumnHeaderStyle
 * @property TableCellStyle|null $RowHeaderStyle
 * @property TableCellStyle|null $CellStyle
 * @property TableCellStyle|null $RowFieldNamesStyle
 * @property RowAlternateColorOptions|null $RowAlternateColorOptions
 * @property 'HIDDEN'|'VISIBLE'|null $CollapsedRowDimensionsVisibility
 * @property 'TABULAR'|'HIERARCHY'|null $RowsLayout
 * @property PivotTableRowsLabelOptions|null $RowsLabelOptions
 * @property string|null $DefaultCellWidth
 */
class PivotTableOptions extends Shape
{
    /**
     * @param array{
     *     MetricPlacement?: 'ROW'|'COLUMN'|null,
     *     SingleMetricVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     ColumnNamesVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     ToggleButtonsVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     ColumnHeaderStyle?: TableCellStyle|null,
     *     RowHeaderStyle?: TableCellStyle|null,
     *     CellStyle?: TableCellStyle|null,
     *     RowFieldNamesStyle?: TableCellStyle|null,
     *     RowAlternateColorOptions?: RowAlternateColorOptions|null,
     *     CollapsedRowDimensionsVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     RowsLayout?: 'TABULAR'|'HIERARCHY'|null,
     *     RowsLabelOptions?: PivotTableRowsLabelOptions|null,
     *     DefaultCellWidth?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
