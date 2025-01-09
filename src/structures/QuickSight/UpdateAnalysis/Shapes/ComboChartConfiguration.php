<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ComboChartFieldWells $FieldWells
 * @property ComboChartSortConfiguration $SortConfiguration
 * @property 'CLUSTERED'|'STACKED'|'STACKED_PERCENT' $BarsArrangement
 * @property AxisDisplayOptions $CategoryAxis
 * @property ChartAxisLabelOptions $CategoryLabelOptions
 * @property AxisDisplayOptions $PrimaryYAxisDisplayOptions
 * @property ChartAxisLabelOptions $PrimaryYAxisLabelOptions
 * @property AxisDisplayOptions $SecondaryYAxisDisplayOptions
 * @property ChartAxisLabelOptions $SecondaryYAxisLabelOptions
 * @property SingleAxisOptions $SingleAxisOptions
 * @property ChartAxisLabelOptions $ColorLabelOptions
 * @property LegendOptions $Legend
 * @property DataLabelOptions $BarDataLabels
 * @property DataLabelOptions $LineDataLabels
 * @property TooltipOptions $Tooltip
 * @property list<ReferenceLine> $ReferenceLines
 * @property VisualPalette $VisualPalette
 * @property VisualInteractionOptions $Interactions
 */
class ComboChartConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: ComboChartFieldWells,
     *     SortConfiguration?: ComboChartSortConfiguration,
     *     BarsArrangement?: 'CLUSTERED'|'STACKED'|'STACKED_PERCENT',
     *     CategoryAxis?: AxisDisplayOptions,
     *     CategoryLabelOptions?: ChartAxisLabelOptions,
     *     PrimaryYAxisDisplayOptions?: AxisDisplayOptions,
     *     PrimaryYAxisLabelOptions?: ChartAxisLabelOptions,
     *     SecondaryYAxisDisplayOptions?: AxisDisplayOptions,
     *     SecondaryYAxisLabelOptions?: ChartAxisLabelOptions,
     *     SingleAxisOptions?: SingleAxisOptions,
     *     ColorLabelOptions?: ChartAxisLabelOptions,
     *     Legend?: LegendOptions,
     *     BarDataLabels?: DataLabelOptions,
     *     LineDataLabels?: DataLabelOptions,
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
