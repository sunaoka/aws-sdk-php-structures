<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'POINT'|'CLUSTER'|'HEATMAP'|null $SelectedPointStyle
 * @property ClusterMarkerConfiguration|null $ClusterMarkerConfiguration
 * @property GeospatialHeatmapConfiguration|null $HeatmapConfiguration
 */
class GeospatialPointStyleOptions extends Shape
{
    /**
     * @param array{
     *     SelectedPointStyle?: 'POINT'|'CLUSTER'|'HEATMAP'|null,
     *     ClusterMarkerConfiguration?: ClusterMarkerConfiguration|null,
     *     HeatmapConfiguration?: GeospatialHeatmapConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
