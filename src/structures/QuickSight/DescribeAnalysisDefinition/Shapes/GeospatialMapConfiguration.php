<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialMapFieldWells $FieldWells
 * @property LegendOptions $Legend
 * @property TooltipOptions $Tooltip
 * @property GeospatialWindowOptions $WindowOptions
 * @property GeospatialMapStyleOptions $MapStyleOptions
 * @property GeospatialPointStyleOptions $PointStyleOptions
 * @property VisualPalette $VisualPalette
 * @property VisualInteractionOptions $Interactions
 */
class GeospatialMapConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: GeospatialMapFieldWells,
     *     Legend?: LegendOptions,
     *     Tooltip?: TooltipOptions,
     *     WindowOptions?: GeospatialWindowOptions,
     *     MapStyleOptions?: GeospatialMapStyleOptions,
     *     PointStyleOptions?: GeospatialPointStyleOptions,
     *     VisualPalette?: VisualPalette,
     *     Interactions?: VisualInteractionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
