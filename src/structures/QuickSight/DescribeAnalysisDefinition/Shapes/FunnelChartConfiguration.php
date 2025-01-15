<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FunnelChartFieldWells|null $FieldWells
 * @property FunnelChartSortConfiguration|null $SortConfiguration
 * @property ChartAxisLabelOptions|null $CategoryLabelOptions
 * @property ChartAxisLabelOptions|null $ValueLabelOptions
 * @property TooltipOptions|null $Tooltip
 * @property FunnelChartDataLabelOptions|null $DataLabelOptions
 * @property VisualPalette|null $VisualPalette
 * @property VisualInteractionOptions|null $Interactions
 */
class FunnelChartConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: FunnelChartFieldWells|null,
     *     SortConfiguration?: FunnelChartSortConfiguration|null,
     *     CategoryLabelOptions?: ChartAxisLabelOptions|null,
     *     ValueLabelOptions?: ChartAxisLabelOptions|null,
     *     Tooltip?: TooltipOptions|null,
     *     DataLabelOptions?: FunnelChartDataLabelOptions|null,
     *     VisualPalette?: VisualPalette|null,
     *     Interactions?: VisualInteractionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
