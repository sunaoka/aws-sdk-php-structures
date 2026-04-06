<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ComboChartFieldWells|null $FieldWells
 * @property ComboChartSortConfiguration|null $SortConfiguration
 * @property 'CLUSTERED'|'STACKED'|'STACKED_PERCENT'|null $BarsArrangement
 * @property AxisDisplayOptions|null $CategoryAxis
 * @property ChartAxisLabelOptions|null $CategoryLabelOptions
 * @property AxisDisplayOptions|null $PrimaryYAxisDisplayOptions
 * @property ChartAxisLabelOptions|null $PrimaryYAxisLabelOptions
 * @property AxisDisplayOptions|null $SecondaryYAxisDisplayOptions
 * @property ChartAxisLabelOptions|null $SecondaryYAxisLabelOptions
 * @property ChartAxisLabelOptions|null $ColorLabelOptions
 * @property LegendOptions|null $Legend
 * @property DataLabelOptions|null $BarDataLabels
 * @property DataLabelOptions|null $LineDataLabels
 * @property TooltipOptions|null $Tooltip
 * @property list<ReferenceLine>|null $ReferenceLines
 * @property VisualPalette|null $VisualPalette
 */
class ComboChartConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: ComboChartFieldWells|null,
     *     SortConfiguration?: ComboChartSortConfiguration|null,
     *     BarsArrangement?: 'CLUSTERED'|'STACKED'|'STACKED_PERCENT'|null,
     *     CategoryAxis?: AxisDisplayOptions|null,
     *     CategoryLabelOptions?: ChartAxisLabelOptions|null,
     *     PrimaryYAxisDisplayOptions?: AxisDisplayOptions|null,
     *     PrimaryYAxisLabelOptions?: ChartAxisLabelOptions|null,
     *     SecondaryYAxisDisplayOptions?: AxisDisplayOptions|null,
     *     SecondaryYAxisLabelOptions?: ChartAxisLabelOptions|null,
     *     ColorLabelOptions?: ChartAxisLabelOptions|null,
     *     Legend?: LegendOptions|null,
     *     BarDataLabels?: DataLabelOptions|null,
     *     LineDataLabels?: DataLabelOptions|null,
     *     Tooltip?: TooltipOptions|null,
     *     ReferenceLines?: list<ReferenceLine>|null,
     *     VisualPalette?: VisualPalette|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
