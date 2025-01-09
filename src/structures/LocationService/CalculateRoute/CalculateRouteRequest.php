<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CalculatorName
 * @property list<double> $DeparturePosition
 * @property list<double> $DestinationPosition
 * @property list<list<double>> $WaypointPositions
 * @property 'Car'|'Truck'|'Walking'|'Bicycle'|'Motorcycle' $TravelMode
 * @property \Aws\Api\DateTimeResult $DepartureTime
 * @property bool $DepartNow
 * @property 'Kilometers'|'Miles' $DistanceUnit
 * @property bool $IncludeLegGeometry
 * @property Shapes\CalculateRouteCarModeOptions $CarModeOptions
 * @property Shapes\CalculateRouteTruckModeOptions $TruckModeOptions
 * @property \Aws\Api\DateTimeResult $ArrivalTime
 * @property 'FastestRoute'|'ShortestRoute' $OptimizeFor
 * @property string $Key
 */
class CalculateRouteRequest extends Request
{
    /**
     * @param array{
     *     CalculatorName: string,
     *     DeparturePosition: list<double>,
     *     DestinationPosition: list<double>,
     *     WaypointPositions?: list<list<double>>,
     *     TravelMode?: 'Car'|'Truck'|'Walking'|'Bicycle'|'Motorcycle',
     *     DepartureTime?: \Aws\Api\DateTimeResult,
     *     DepartNow?: bool,
     *     DistanceUnit?: 'Kilometers'|'Miles',
     *     IncludeLegGeometry?: bool,
     *     CarModeOptions?: Shapes\CalculateRouteCarModeOptions,
     *     TruckModeOptions?: Shapes\CalculateRouteTruckModeOptions,
     *     ArrivalTime?: \Aws\Api\DateTimeResult,
     *     OptimizeFor?: 'FastestRoute'|'ShortestRoute',
     *     Key?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
