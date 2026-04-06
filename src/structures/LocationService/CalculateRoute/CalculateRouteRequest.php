<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CalculatorName
 * @property list<double> $DeparturePosition
 * @property list<double> $DestinationPosition
 * @property list<list<double>>|null $WaypointPositions
 * @property 'Car'|'Truck'|'Walking'|'Bicycle'|'Motorcycle'|null $TravelMode
 * @property \Aws\Api\DateTimeResult|null $DepartureTime
 * @property bool|null $DepartNow
 * @property 'Kilometers'|'Miles'|null $DistanceUnit
 * @property bool|null $IncludeLegGeometry
 * @property Shapes\CalculateRouteCarModeOptions|null $CarModeOptions
 * @property Shapes\CalculateRouteTruckModeOptions|null $TruckModeOptions
 * @property \Aws\Api\DateTimeResult|null $ArrivalTime
 * @property 'FastestRoute'|'ShortestRoute'|null $OptimizeFor
 * @property string|null $Key
 */
class CalculateRouteRequest extends Request
{
    /**
     * @param array{
     *     CalculatorName: string,
     *     DeparturePosition: list<double>,
     *     DestinationPosition: list<double>,
     *     WaypointPositions?: list<list<double>>|null,
     *     TravelMode?: 'Car'|'Truck'|'Walking'|'Bicycle'|'Motorcycle'|null,
     *     DepartureTime?: \Aws\Api\DateTimeResult|null,
     *     DepartNow?: bool|null,
     *     DistanceUnit?: 'Kilometers'|'Miles'|null,
     *     IncludeLegGeometry?: bool|null,
     *     CarModeOptions?: Shapes\CalculateRouteCarModeOptions|null,
     *     TruckModeOptions?: Shapes\CalculateRouteTruckModeOptions|null,
     *     ArrivalTime?: \Aws\Api\DateTimeResult|null,
     *     OptimizeFor?: 'FastestRoute'|'ShortestRoute'|null,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
