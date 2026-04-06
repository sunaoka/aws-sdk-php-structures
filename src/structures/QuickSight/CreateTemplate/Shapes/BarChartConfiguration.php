<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BarChartFieldWells|null $FieldWells
 * @property BarChartSortConfiguration|null $SortConfiguration
 * @property 'HORIZONTAL'|'VERTICAL'|null $Orientation
 * @property 'CLUSTERED'|'STACKED'|'STACKED_PERCENT'|null $BarsArrangement
 * @property VisualPalette|null $VisualPalette
 * @property SmallMultiplesOptions|null $SmallMultiplesOptions
 * @property AxisDisplayOptions|null $CategoryAxis
 * @property ChartAxisLabelOptions|null $CategoryLabelOptions
 * @property AxisDisplayOptions|null $ValueAxis
 * @property ChartAxisLabelOptions|null $ValueLabelOptions
 * @property ChartAxisLabelOptions|null $ColorLabelOptions
 * @property LegendOptions|null $Legend
 * @property DataLabelOptions|null $DataLabels
 * @property TooltipOptions|null $Tooltip
 * @property list<ReferenceLine>|null $ReferenceLines
 * @property list<ContributionAnalysisDefault>|null $ContributionAnalysisDefaults
 * @property VisualInteractionOptions|null $Interactions
 */
class BarChartConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: BarChartFieldWells|null,
     *     SortConfiguration?: BarChartSortConfiguration|null,
     *     Orientation?: 'HORIZONTAL'|'VERTICAL'|null,
     *     BarsArrangement?: 'CLUSTERED'|'STACKED'|'STACKED_PERCENT'|null,
     *     VisualPalette?: VisualPalette|null,
     *     SmallMultiplesOptions?: SmallMultiplesOptions|null,
     *     CategoryAxis?: AxisDisplayOptions|null,
     *     CategoryLabelOptions?: ChartAxisLabelOptions|null,
     *     ValueAxis?: AxisDisplayOptions|null,
     *     ValueLabelOptions?: ChartAxisLabelOptions|null,
     *     ColorLabelOptions?: ChartAxisLabelOptions|null,
     *     Legend?: LegendOptions|null,
     *     DataLabels?: DataLabelOptions|null,
     *     Tooltip?: TooltipOptions|null,
     *     ReferenceLines?: list<ReferenceLine>|null,
     *     ContributionAnalysisDefaults?: list<ContributionAnalysisDefault>|null,
     *     Interactions?: VisualInteractionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
