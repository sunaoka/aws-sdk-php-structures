<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ROW'|'COLUMN' $MetricPlacement
 * @property 'HIDDEN'|'VISIBLE' $SingleMetricVisibility
 * @property 'HIDDEN'|'VISIBLE' $ColumnNamesVisibility
 * @property 'HIDDEN'|'VISIBLE' $ToggleButtonsVisibility
 * @property TableCellStyle $ColumnHeaderStyle
 * @property TableCellStyle $RowHeaderStyle
 * @property TableCellStyle $CellStyle
 * @property TableCellStyle $RowFieldNamesStyle
 * @property RowAlternateColorOptions $RowAlternateColorOptions
 * @property 'HIDDEN'|'VISIBLE' $CollapsedRowDimensionsVisibility
 * @property 'TABULAR'|'HIERARCHY' $RowsLayout
 * @property PivotTableRowsLabelOptions $RowsLabelOptions
 * @property string $DefaultCellWidth
 */
class PivotTableOptions extends Shape
{
    /**
     * @param array{
     *     MetricPlacement?: 'ROW'|'COLUMN',
     *     SingleMetricVisibility?: 'HIDDEN'|'VISIBLE',
     *     ColumnNamesVisibility?: 'HIDDEN'|'VISIBLE',
     *     ToggleButtonsVisibility?: 'HIDDEN'|'VISIBLE',
     *     ColumnHeaderStyle?: TableCellStyle,
     *     RowHeaderStyle?: TableCellStyle,
     *     CellStyle?: TableCellStyle,
     *     RowFieldNamesStyle?: TableCellStyle,
     *     RowAlternateColorOptions?: RowAlternateColorOptions,
     *     CollapsedRowDimensionsVisibility?: 'HIDDEN'|'VISIBLE',
     *     RowsLayout?: 'TABULAR'|'HIERARCHY',
     *     RowsLabelOptions?: PivotTableRowsLabelOptions,
     *     DefaultCellWidth?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
