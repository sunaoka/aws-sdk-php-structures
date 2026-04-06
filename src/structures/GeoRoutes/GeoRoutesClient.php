<?php

namespace Sunaoka\Aws\Structures\GeoRoutes;

class GeoRoutesClient extends \Aws\GeoRoutes\GeoRoutesClient
{
    use CalculateIsolines\CalculateIsolinesTrait;
    use CalculateRouteMatrix\CalculateRouteMatrixTrait;
    use CalculateRoutes\CalculateRoutesTrait;
    use OptimizeWaypoints\OptimizeWaypointsTrait;
    use SnapToRoads\SnapToRoadsTrait;
}
