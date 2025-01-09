<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TreeMapFieldWells $FieldWells
 * @property TreeMapSortConfiguration $SortConfiguration
 * @property ChartAxisLabelOptions $GroupLabelOptions
 * @property ChartAxisLabelOptions $SizeLabelOptions
 * @property ChartAxisLabelOptions $ColorLabelOptions
 * @property ColorScale $ColorScale
 * @property LegendOptions $Legend
 * @property DataLabelOptions $DataLabels
 * @property TooltipOptions $Tooltip
 * @property VisualInteractionOptions $Interactions
 */
class TreeMapConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: TreeMapFieldWells,
     *     SortConfiguration?: TreeMapSortConfiguration,
     *     GroupLabelOptions?: ChartAxisLabelOptions,
     *     SizeLabelOptions?: ChartAxisLabelOptions,
     *     ColorLabelOptions?: ChartAxisLabelOptions,
     *     ColorScale?: ColorScale,
     *     Legend?: LegendOptions,
     *     DataLabels?: DataLabelOptions,
     *     Tooltip?: TooltipOptions,
     *     Interactions?: VisualInteractionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
