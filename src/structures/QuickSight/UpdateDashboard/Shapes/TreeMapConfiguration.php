<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TreeMapFieldWells|null $FieldWells
 * @property TreeMapSortConfiguration|null $SortConfiguration
 * @property ChartAxisLabelOptions|null $GroupLabelOptions
 * @property ChartAxisLabelOptions|null $SizeLabelOptions
 * @property ChartAxisLabelOptions|null $ColorLabelOptions
 * @property ColorScale|null $ColorScale
 * @property LegendOptions|null $Legend
 * @property DataLabelOptions|null $DataLabels
 * @property TooltipOptions|null $Tooltip
 * @property VisualInteractionOptions|null $Interactions
 */
class TreeMapConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: TreeMapFieldWells|null,
     *     SortConfiguration?: TreeMapSortConfiguration|null,
     *     GroupLabelOptions?: ChartAxisLabelOptions|null,
     *     SizeLabelOptions?: ChartAxisLabelOptions|null,
     *     ColorLabelOptions?: ChartAxisLabelOptions|null,
     *     ColorScale?: ColorScale|null,
     *     Legend?: LegendOptions|null,
     *     DataLabels?: DataLabelOptions|null,
     *     Tooltip?: TooltipOptions|null,
     *     Interactions?: VisualInteractionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
