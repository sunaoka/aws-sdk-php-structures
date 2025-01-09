<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LegendOptions $Legend
 * @property list<GeospatialLayerItem> $MapLayers
 * @property GeospatialMapState $MapState
 * @property GeospatialMapStyle $MapStyle
 * @property VisualInteractionOptions $Interactions
 */
class GeospatialLayerMapConfiguration extends Shape
{
    /**
     * @param array{
     *     Legend?: LegendOptions,
     *     MapLayers?: list<GeospatialLayerItem>,
     *     MapState?: GeospatialMapState,
     *     MapStyle?: GeospatialMapStyle,
     *     Interactions?: VisualInteractionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
