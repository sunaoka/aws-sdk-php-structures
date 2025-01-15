<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScatterPlotFieldWells|null $FieldWells
 * @property ScatterPlotSortConfiguration|null $SortConfiguration
 * @property ChartAxisLabelOptions|null $XAxisLabelOptions
 * @property AxisDisplayOptions|null $XAxisDisplayOptions
 * @property ChartAxisLabelOptions|null $YAxisLabelOptions
 * @property AxisDisplayOptions|null $YAxisDisplayOptions
 * @property LegendOptions|null $Legend
 * @property DataLabelOptions|null $DataLabels
 * @property TooltipOptions|null $Tooltip
 * @property VisualPalette|null $VisualPalette
 * @property VisualInteractionOptions|null $Interactions
 */
class ScatterPlotConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: ScatterPlotFieldWells|null,
     *     SortConfiguration?: ScatterPlotSortConfiguration|null,
     *     XAxisLabelOptions?: ChartAxisLabelOptions|null,
     *     XAxisDisplayOptions?: AxisDisplayOptions|null,
     *     YAxisLabelOptions?: ChartAxisLabelOptions|null,
     *     YAxisDisplayOptions?: AxisDisplayOptions|null,
     *     Legend?: LegendOptions|null,
     *     DataLabels?: DataLabelOptions|null,
     *     Tooltip?: TooltipOptions|null,
     *     VisualPalette?: VisualPalette|null,
     *     Interactions?: VisualInteractionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
