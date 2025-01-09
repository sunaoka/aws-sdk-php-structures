<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HeatMapFieldWells $FieldWells
 * @property HeatMapSortConfiguration $SortConfiguration
 * @property ChartAxisLabelOptions $RowLabelOptions
 * @property ChartAxisLabelOptions $ColumnLabelOptions
 * @property ColorScale $ColorScale
 * @property LegendOptions $Legend
 * @property DataLabelOptions $DataLabels
 * @property TooltipOptions $Tooltip
 * @property VisualInteractionOptions $Interactions
 */
class HeatMapConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: HeatMapFieldWells,
     *     SortConfiguration?: HeatMapSortConfiguration,
     *     RowLabelOptions?: ChartAxisLabelOptions,
     *     ColumnLabelOptions?: ChartAxisLabelOptions,
     *     ColorScale?: ColorScale,
     *     Legend?: LegendOptions,
     *     DataLabels?: DataLabelOptions,
     *     Tooltip?: TooltipOptions,
     *     Interactions?: VisualInteractionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
