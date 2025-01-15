<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PieChartFieldWells|null $FieldWells
 * @property PieChartSortConfiguration|null $SortConfiguration
 * @property DonutOptions|null $DonutOptions
 * @property SmallMultiplesOptions|null $SmallMultiplesOptions
 * @property ChartAxisLabelOptions|null $CategoryLabelOptions
 * @property ChartAxisLabelOptions|null $ValueLabelOptions
 * @property LegendOptions|null $Legend
 * @property DataLabelOptions|null $DataLabels
 * @property TooltipOptions|null $Tooltip
 * @property VisualPalette|null $VisualPalette
 * @property list<ContributionAnalysisDefault>|null $ContributionAnalysisDefaults
 * @property VisualInteractionOptions|null $Interactions
 */
class PieChartConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: PieChartFieldWells|null,
     *     SortConfiguration?: PieChartSortConfiguration|null,
     *     DonutOptions?: DonutOptions|null,
     *     SmallMultiplesOptions?: SmallMultiplesOptions|null,
     *     CategoryLabelOptions?: ChartAxisLabelOptions|null,
     *     ValueLabelOptions?: ChartAxisLabelOptions|null,
     *     Legend?: LegendOptions|null,
     *     DataLabels?: DataLabelOptions|null,
     *     Tooltip?: TooltipOptions|null,
     *     VisualPalette?: VisualPalette|null,
     *     ContributionAnalysisDefaults?: list<ContributionAnalysisDefault>|null,
     *     Interactions?: VisualInteractionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
