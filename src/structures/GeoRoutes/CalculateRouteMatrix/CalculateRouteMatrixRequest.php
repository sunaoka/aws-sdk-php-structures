<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RouteMatrixAllowOptions $Allow
 * @property Shapes\RouteMatrixAvoidanceOptions $Avoid
 * @property bool $DepartNow
 * @property string $DepartureTime
 * @property list<Shapes\RouteMatrixDestination> $Destinations
 * @property Shapes\RouteMatrixExclusionOptions $Exclude
 * @property string $Key
 * @property 'FastestRoute'|'ShortestRoute' $OptimizeRoutingFor
 * @property list<Shapes\RouteMatrixOrigin> $Origins
 * @property Shapes\RouteMatrixBoundary $RoutingBoundary
 * @property Shapes\RouteMatrixTrafficOptions $Traffic
 * @property 'Car'|'Pedestrian'|'Scooter'|'Truck' $TravelMode
 * @property Shapes\RouteMatrixTravelModeOptions $TravelModeOptions
 */
class CalculateRouteMatrixRequest extends Request
{
    /**
     * @param array{
     *     Allow?: Shapes\RouteMatrixAllowOptions,
     *     Avoid?: Shapes\RouteMatrixAvoidanceOptions,
     *     DepartNow?: bool,
     *     DepartureTime?: string,
     *     Destinations: list<Shapes\RouteMatrixDestination>,
     *     Exclude?: Shapes\RouteMatrixExclusionOptions,
     *     Key?: string,
     *     OptimizeRoutingFor?: 'FastestRoute'|'ShortestRoute',
     *     Origins: list<Shapes\RouteMatrixOrigin>,
     *     RoutingBoundary: Shapes\RouteMatrixBoundary,
     *     Traffic?: Shapes\RouteMatrixTrafficOptions,
     *     TravelMode?: 'Car'|'Pedestrian'|'Scooter'|'Truck',
     *     TravelModeOptions?: Shapes\RouteMatrixTravelModeOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
