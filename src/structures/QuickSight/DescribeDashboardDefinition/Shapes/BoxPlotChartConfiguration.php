<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BoxPlotFieldWells|null $FieldWells
 * @property BoxPlotSortConfiguration|null $SortConfiguration
 * @property BoxPlotOptions|null $BoxPlotOptions
 * @property AxisDisplayOptions|null $CategoryAxis
 * @property ChartAxisLabelOptions|null $CategoryLabelOptions
 * @property AxisDisplayOptions|null $PrimaryYAxisDisplayOptions
 * @property ChartAxisLabelOptions|null $PrimaryYAxisLabelOptions
 * @property LegendOptions|null $Legend
 * @property TooltipOptions|null $Tooltip
 * @property list<ReferenceLine>|null $ReferenceLines
 * @property VisualPalette|null $VisualPalette
 * @property VisualInteractionOptions|null $Interactions
 */
class BoxPlotChartConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: BoxPlotFieldWells|null,
     *     SortConfiguration?: BoxPlotSortConfiguration|null,
     *     BoxPlotOptions?: BoxPlotOptions|null,
     *     CategoryAxis?: AxisDisplayOptions|null,
     *     CategoryLabelOptions?: ChartAxisLabelOptions|null,
     *     PrimaryYAxisDisplayOptions?: AxisDisplayOptions|null,
     *     PrimaryYAxisLabelOptions?: ChartAxisLabelOptions|null,
     *     Legend?: LegendOptions|null,
     *     Tooltip?: TooltipOptions|null,
     *     ReferenceLines?: list<ReferenceLine>|null,
     *     VisualPalette?: VisualPalette|null,
     *     Interactions?: VisualInteractionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
