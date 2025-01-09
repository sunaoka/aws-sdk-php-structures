<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BoxPlotFieldWells $FieldWells
 * @property BoxPlotSortConfiguration $SortConfiguration
 * @property BoxPlotOptions $BoxPlotOptions
 * @property AxisDisplayOptions $CategoryAxis
 * @property ChartAxisLabelOptions $CategoryLabelOptions
 * @property AxisDisplayOptions $PrimaryYAxisDisplayOptions
 * @property ChartAxisLabelOptions $PrimaryYAxisLabelOptions
 * @property LegendOptions $Legend
 * @property TooltipOptions $Tooltip
 * @property list<ReferenceLine> $ReferenceLines
 * @property VisualPalette $VisualPalette
 * @property VisualInteractionOptions $Interactions
 */
class BoxPlotChartConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: BoxPlotFieldWells,
     *     SortConfiguration?: BoxPlotSortConfiguration,
     *     BoxPlotOptions?: BoxPlotOptions,
     *     CategoryAxis?: AxisDisplayOptions,
     *     CategoryLabelOptions?: ChartAxisLabelOptions,
     *     PrimaryYAxisDisplayOptions?: AxisDisplayOptions,
     *     PrimaryYAxisLabelOptions?: ChartAxisLabelOptions,
     *     Legend?: LegendOptions,
     *     Tooltip?: TooltipOptions,
     *     ReferenceLines?: list<ReferenceLine>,
     *     VisualPalette?: VisualPalette,
     *     Interactions?: VisualInteractionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
