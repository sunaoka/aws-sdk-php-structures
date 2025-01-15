<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialMapFieldWells|null $FieldWells
 * @property LegendOptions|null $Legend
 * @property TooltipOptions|null $Tooltip
 * @property GeospatialWindowOptions|null $WindowOptions
 * @property GeospatialMapStyleOptions|null $MapStyleOptions
 * @property GeospatialPointStyleOptions|null $PointStyleOptions
 * @property VisualPalette|null $VisualPalette
 * @property VisualInteractionOptions|null $Interactions
 */
class GeospatialMapConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: GeospatialMapFieldWells|null,
     *     Legend?: LegendOptions|null,
     *     Tooltip?: TooltipOptions|null,
     *     WindowOptions?: GeospatialWindowOptions|null,
     *     MapStyleOptions?: GeospatialMapStyleOptions|null,
     *     PointStyleOptions?: GeospatialPointStyleOptions|null,
     *     VisualPalette?: VisualPalette|null,
     *     Interactions?: VisualInteractionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
