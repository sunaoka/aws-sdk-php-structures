<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FunnelChartFieldWells $FieldWells
 * @property FunnelChartSortConfiguration $SortConfiguration
 * @property ChartAxisLabelOptions $CategoryLabelOptions
 * @property ChartAxisLabelOptions $ValueLabelOptions
 * @property TooltipOptions $Tooltip
 * @property FunnelChartDataLabelOptions $DataLabelOptions
 * @property VisualPalette $VisualPalette
 * @property VisualInteractionOptions $Interactions
 */
class FunnelChartConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: FunnelChartFieldWells,
     *     SortConfiguration?: FunnelChartSortConfiguration,
     *     CategoryLabelOptions?: ChartAxisLabelOptions,
     *     ValueLabelOptions?: ChartAxisLabelOptions,
     *     Tooltip?: TooltipOptions,
     *     DataLabelOptions?: FunnelChartDataLabelOptions,
     *     VisualPalette?: VisualPalette,
     *     Interactions?: VisualInteractionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
