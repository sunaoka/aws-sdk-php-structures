<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilledMapFieldWells $FieldWells
 * @property FilledMapSortConfiguration $SortConfiguration
 * @property LegendOptions $Legend
 * @property TooltipOptions $Tooltip
 * @property GeospatialWindowOptions $WindowOptions
 * @property GeospatialMapStyleOptions $MapStyleOptions
 * @property VisualInteractionOptions $Interactions
 */
class FilledMapConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: FilledMapFieldWells,
     *     SortConfiguration?: FilledMapSortConfiguration,
     *     Legend?: LegendOptions,
     *     Tooltip?: TooltipOptions,
     *     WindowOptions?: GeospatialWindowOptions,
     *     MapStyleOptions?: GeospatialMapStyleOptions,
     *     Interactions?: VisualInteractionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
