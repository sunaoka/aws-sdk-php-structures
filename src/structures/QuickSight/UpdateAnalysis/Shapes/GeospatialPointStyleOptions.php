<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'POINT'|'CLUSTER'|'HEATMAP' $SelectedPointStyle
 * @property ClusterMarkerConfiguration $ClusterMarkerConfiguration
 * @property GeospatialHeatmapConfiguration $HeatmapConfiguration
 */
class GeospatialPointStyleOptions extends Shape
{
    /**
     * @param array{
     *     SelectedPointStyle?: 'POINT'|'CLUSTER'|'HEATMAP',
     *     ClusterMarkerConfiguration?: ClusterMarkerConfiguration,
     *     HeatmapConfiguration?: GeospatialHeatmapConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
