<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScatterPlotFieldWells $FieldWells
 * @property ScatterPlotSortConfiguration $SortConfiguration
 * @property ChartAxisLabelOptions $XAxisLabelOptions
 * @property AxisDisplayOptions $XAxisDisplayOptions
 * @property ChartAxisLabelOptions $YAxisLabelOptions
 * @property AxisDisplayOptions $YAxisDisplayOptions
 * @property LegendOptions $Legend
 * @property DataLabelOptions $DataLabels
 * @property TooltipOptions $Tooltip
 * @property VisualPalette $VisualPalette
 * @property VisualInteractionOptions $Interactions
 */
class ScatterPlotConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: ScatterPlotFieldWells,
     *     SortConfiguration?: ScatterPlotSortConfiguration,
     *     XAxisLabelOptions?: ChartAxisLabelOptions,
     *     XAxisDisplayOptions?: AxisDisplayOptions,
     *     YAxisLabelOptions?: ChartAxisLabelOptions,
     *     YAxisDisplayOptions?: AxisDisplayOptions,
     *     Legend?: LegendOptions,
     *     DataLabels?: DataLabelOptions,
     *     Tooltip?: TooltipOptions,
     *     VisualPalette?: VisualPalette,
     *     Interactions?: VisualInteractionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
