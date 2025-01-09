<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WaterfallChartFieldWells $FieldWells
 * @property WaterfallChartSortConfiguration $SortConfiguration
 * @property WaterfallChartOptions $WaterfallChartOptions
 * @property ChartAxisLabelOptions $CategoryAxisLabelOptions
 * @property AxisDisplayOptions $CategoryAxisDisplayOptions
 * @property ChartAxisLabelOptions $PrimaryYAxisLabelOptions
 * @property AxisDisplayOptions $PrimaryYAxisDisplayOptions
 * @property LegendOptions $Legend
 * @property DataLabelOptions $DataLabels
 * @property VisualPalette $VisualPalette
 * @property WaterfallChartColorConfiguration $ColorConfiguration
 * @property VisualInteractionOptions $Interactions
 */
class WaterfallChartConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: WaterfallChartFieldWells,
     *     SortConfiguration?: WaterfallChartSortConfiguration,
     *     WaterfallChartOptions?: WaterfallChartOptions,
     *     CategoryAxisLabelOptions?: ChartAxisLabelOptions,
     *     CategoryAxisDisplayOptions?: AxisDisplayOptions,
     *     PrimaryYAxisLabelOptions?: ChartAxisLabelOptions,
     *     PrimaryYAxisDisplayOptions?: AxisDisplayOptions,
     *     Legend?: LegendOptions,
     *     DataLabels?: DataLabelOptions,
     *     VisualPalette?: VisualPalette,
     *     ColorConfiguration?: WaterfallChartColorConfiguration,
     *     Interactions?: VisualInteractionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
