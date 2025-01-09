<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BarChartFieldWells $FieldWells
 * @property BarChartSortConfiguration $SortConfiguration
 * @property 'HORIZONTAL'|'VERTICAL' $Orientation
 * @property 'CLUSTERED'|'STACKED'|'STACKED_PERCENT' $BarsArrangement
 * @property VisualPalette $VisualPalette
 * @property SmallMultiplesOptions $SmallMultiplesOptions
 * @property AxisDisplayOptions $CategoryAxis
 * @property ChartAxisLabelOptions $CategoryLabelOptions
 * @property AxisDisplayOptions $ValueAxis
 * @property ChartAxisLabelOptions $ValueLabelOptions
 * @property ChartAxisLabelOptions $ColorLabelOptions
 * @property LegendOptions $Legend
 * @property DataLabelOptions $DataLabels
 * @property TooltipOptions $Tooltip
 * @property list<ReferenceLine> $ReferenceLines
 * @property list<ContributionAnalysisDefault> $ContributionAnalysisDefaults
 * @property VisualInteractionOptions $Interactions
 */
class BarChartConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: BarChartFieldWells,
     *     SortConfiguration?: BarChartSortConfiguration,
     *     Orientation?: 'HORIZONTAL'|'VERTICAL',
     *     BarsArrangement?: 'CLUSTERED'|'STACKED'|'STACKED_PERCENT',
     *     VisualPalette?: VisualPalette,
     *     SmallMultiplesOptions?: SmallMultiplesOptions,
     *     CategoryAxis?: AxisDisplayOptions,
     *     CategoryLabelOptions?: ChartAxisLabelOptions,
     *     ValueAxis?: AxisDisplayOptions,
     *     ValueLabelOptions?: ChartAxisLabelOptions,
     *     ColorLabelOptions?: ChartAxisLabelOptions,
     *     Legend?: LegendOptions,
     *     DataLabels?: DataLabelOptions,
     *     Tooltip?: TooltipOptions,
     *     ReferenceLines?: list<ReferenceLine>,
     *     ContributionAnalysisDefaults?: list<ContributionAnalysisDefault>,
     *     Interactions?: VisualInteractionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
