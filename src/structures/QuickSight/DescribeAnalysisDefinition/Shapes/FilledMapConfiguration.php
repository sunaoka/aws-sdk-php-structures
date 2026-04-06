<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilledMapFieldWells|null $FieldWells
 * @property FilledMapSortConfiguration|null $SortConfiguration
 * @property LegendOptions|null $Legend
 * @property TooltipOptions|null $Tooltip
 * @property GeospatialWindowOptions|null $WindowOptions
 * @property GeospatialMapStyleOptions|null $MapStyleOptions
 * @property VisualInteractionOptions|null $Interactions
 */
class FilledMapConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: FilledMapFieldWells|null,
     *     SortConfiguration?: FilledMapSortConfiguration|null,
     *     Legend?: LegendOptions|null,
     *     Tooltip?: TooltipOptions|null,
     *     WindowOptions?: GeospatialWindowOptions|null,
     *     MapStyleOptions?: GeospatialMapStyleOptions|null,
     *     Interactions?: VisualInteractionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
