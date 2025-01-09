<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PieChartFieldWells $FieldWells
 * @property PieChartSortConfiguration $SortConfiguration
 * @property DonutOptions $DonutOptions
 * @property SmallMultiplesOptions $SmallMultiplesOptions
 * @property ChartAxisLabelOptions $CategoryLabelOptions
 * @property ChartAxisLabelOptions $ValueLabelOptions
 * @property LegendOptions $Legend
 * @property DataLabelOptions $DataLabels
 * @property TooltipOptions $Tooltip
 * @property VisualPalette $VisualPalette
 * @property list<ContributionAnalysisDefault> $ContributionAnalysisDefaults
 * @property VisualInteractionOptions $Interactions
 */
class PieChartConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: PieChartFieldWells,
     *     SortConfiguration?: PieChartSortConfiguration,
     *     DonutOptions?: DonutOptions,
     *     SmallMultiplesOptions?: SmallMultiplesOptions,
     *     CategoryLabelOptions?: ChartAxisLabelOptions,
     *     ValueLabelOptions?: ChartAxisLabelOptions,
     *     Legend?: LegendOptions,
     *     DataLabels?: DataLabelOptions,
     *     Tooltip?: TooltipOptions,
     *     VisualPalette?: VisualPalette,
     *     ContributionAnalysisDefaults?: list<ContributionAnalysisDefault>,
     *     Interactions?: VisualInteractionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
