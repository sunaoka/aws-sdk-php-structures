<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RouteMatrixAllowOptions|null $Allow
 * @property Shapes\RouteMatrixAvoidanceOptions|null $Avoid
 * @property bool|null $DepartNow
 * @property string|null $DepartureTime
 * @property list<Shapes\RouteMatrixDestination> $Destinations
 * @property Shapes\RouteMatrixExclusionOptions|null $Exclude
 * @property string|null $Key
 * @property 'FastestRoute'|'ShortestRoute'|null $OptimizeRoutingFor
 * @property list<Shapes\RouteMatrixOrigin> $Origins
 * @property Shapes\RouteMatrixBoundary $RoutingBoundary
 * @property Shapes\RouteMatrixTrafficOptions|null $Traffic
 * @property 'Car'|'Pedestrian'|'Scooter'|'Truck'|null $TravelMode
 * @property Shapes\RouteMatrixTravelModeOptions|null $TravelModeOptions
 */
class CalculateRouteMatrixRequest extends Request
{
    /**
     * @param array{
     *     Allow?: Shapes\RouteMatrixAllowOptions|null,
     *     Avoid?: Shapes\RouteMatrixAvoidanceOptions|null,
     *     DepartNow?: bool|null,
     *     DepartureTime?: string|null,
     *     Destinations: list<Shapes\RouteMatrixDestination>,
     *     Exclude?: Shapes\RouteMatrixExclusionOptions|null,
     *     Key?: string|null,
     *     OptimizeRoutingFor?: 'FastestRoute'|'ShortestRoute'|null,
     *     Origins: list<Shapes\RouteMatrixOrigin>,
     *     RoutingBoundary: Shapes\RouteMatrixBoundary,
     *     Traffic?: Shapes\RouteMatrixTrafficOptions|null,
     *     TravelMode?: 'Car'|'Pedestrian'|'Scooter'|'Truck'|null,
     *     TravelModeOptions?: Shapes\RouteMatrixTravelModeOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
