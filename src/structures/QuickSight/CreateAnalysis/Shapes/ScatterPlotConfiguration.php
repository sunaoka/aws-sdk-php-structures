<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScatterPlotFieldWells|null $FieldWells
 * @property ChartAxisLabelOptions|null $XAxisLabelOptions
 * @property AxisDisplayOptions|null $XAxisDisplayOptions
 * @property ChartAxisLabelOptions|null $YAxisLabelOptions
 * @property AxisDisplayOptions|null $YAxisDisplayOptions
 * @property LegendOptions|null $Legend
 * @property DataLabelOptions|null $DataLabels
 * @property TooltipOptions|null $Tooltip
 * @property VisualPalette|null $VisualPalette
 */
class ScatterPlotConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: ScatterPlotFieldWells|null,
     *     XAxisLabelOptions?: ChartAxisLabelOptions|null,
     *     XAxisDisplayOptions?: AxisDisplayOptions|null,
     *     YAxisLabelOptions?: ChartAxisLabelOptions|null,
     *     YAxisDisplayOptions?: AxisDisplayOptions|null,
     *     Legend?: LegendOptions|null,
     *     DataLabels?: DataLabelOptions|null,
     *     Tooltip?: TooltipOptions|null,
     *     VisualPalette?: VisualPalette|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
