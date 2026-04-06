<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HeatMapFieldWells|null $FieldWells
 * @property HeatMapSortConfiguration|null $SortConfiguration
 * @property ChartAxisLabelOptions|null $RowLabelOptions
 * @property ChartAxisLabelOptions|null $ColumnLabelOptions
 * @property ColorScale|null $ColorScale
 * @property LegendOptions|null $Legend
 * @property DataLabelOptions|null $DataLabels
 * @property TooltipOptions|null $Tooltip
 * @property VisualInteractionOptions|null $Interactions
 */
class HeatMapConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: HeatMapFieldWells|null,
     *     SortConfiguration?: HeatMapSortConfiguration|null,
     *     RowLabelOptions?: ChartAxisLabelOptions|null,
     *     ColumnLabelOptions?: ChartAxisLabelOptions|null,
     *     ColorScale?: ColorScale|null,
     *     Legend?: LegendOptions|null,
     *     DataLabels?: DataLabelOptions|null,
     *     Tooltip?: TooltipOptions|null,
     *     Interactions?: VisualInteractionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
