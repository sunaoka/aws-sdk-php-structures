<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WaterfallChartFieldWells|null $FieldWells
 * @property WaterfallChartSortConfiguration|null $SortConfiguration
 * @property WaterfallChartOptions|null $WaterfallChartOptions
 * @property ChartAxisLabelOptions|null $CategoryAxisLabelOptions
 * @property AxisDisplayOptions|null $CategoryAxisDisplayOptions
 * @property ChartAxisLabelOptions|null $PrimaryYAxisLabelOptions
 * @property AxisDisplayOptions|null $PrimaryYAxisDisplayOptions
 * @property LegendOptions|null $Legend
 * @property DataLabelOptions|null $DataLabels
 * @property VisualPalette|null $VisualPalette
 * @property WaterfallChartColorConfiguration|null $ColorConfiguration
 * @property VisualInteractionOptions|null $Interactions
 */
class WaterfallChartConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: WaterfallChartFieldWells|null,
     *     SortConfiguration?: WaterfallChartSortConfiguration|null,
     *     WaterfallChartOptions?: WaterfallChartOptions|null,
     *     CategoryAxisLabelOptions?: ChartAxisLabelOptions|null,
     *     CategoryAxisDisplayOptions?: AxisDisplayOptions|null,
     *     PrimaryYAxisLabelOptions?: ChartAxisLabelOptions|null,
     *     PrimaryYAxisDisplayOptions?: AxisDisplayOptions|null,
     *     Legend?: LegendOptions|null,
     *     DataLabels?: DataLabelOptions|null,
     *     VisualPalette?: VisualPalette|null,
     *     ColorConfiguration?: WaterfallChartColorConfiguration|null,
     *     Interactions?: VisualInteractionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
