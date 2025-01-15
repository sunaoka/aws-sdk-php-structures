<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LegendOptions|null $Legend
 * @property list<GeospatialLayerItem>|null $MapLayers
 * @property GeospatialMapState|null $MapState
 * @property GeospatialMapStyle|null $MapStyle
 * @property VisualInteractionOptions|null $Interactions
 */
class GeospatialLayerMapConfiguration extends Shape
{
    /**
     * @param array{
     *     Legend?: LegendOptions|null,
     *     MapLayers?: list<GeospatialLayerItem>|null,
     *     MapState?: GeospatialMapState|null,
     *     MapStyle?: GeospatialMapStyle|null,
     *     Interactions?: VisualInteractionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
