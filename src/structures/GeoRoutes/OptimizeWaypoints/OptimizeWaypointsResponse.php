<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\WaypointOptimizationConnection> $Connections
 * @property int $Distance
 * @property int $Duration
 * @property list<Shapes\WaypointOptimizationImpedingWaypoint> $ImpedingWaypoints
 * @property list<Shapes\WaypointOptimizationOptimizedWaypoint> $OptimizedWaypoints
 * @property string $PricingBucket
 * @property Shapes\WaypointOptimizationTimeBreakdown $TimeBreakdown
 */
class OptimizeWaypointsResponse extends Response
{
}
