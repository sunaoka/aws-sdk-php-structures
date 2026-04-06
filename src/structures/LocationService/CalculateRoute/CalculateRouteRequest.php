<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CalculatorName
 * @property Shapes\CalculateRouteCarModeOptions|null $CarModeOptions
 * @property bool|null $DepartNow
 * @property list<double> $DeparturePosition
 * @property \Aws\Api\DateTimeResult|null $DepartureTime
 * @property list<double> $DestinationPosition
 * @property 'Kilometers'|'Miles'|null $DistanceUnit
 * @property bool|null $IncludeLegGeometry
 * @property string|null $Key
 * @property 'Car'|'Truck'|'Walking'|'Bicycle'|'Motorcycle'|null $TravelMode
 * @property Shapes\CalculateRouteTruckModeOptions|null $TruckModeOptions
 * @property list<list<double>>|null $WaypointPositions
 */
class CalculateRouteRequest extends Request
{
    /**
     * @param array{
     *     CalculatorName: string,
     *     CarModeOptions?: Shapes\CalculateRouteCarModeOptions|null,
     *     DepartNow?: bool|null,
     *     DeparturePosition: list<double>,
     *     DepartureTime?: \Aws\Api\DateTimeResult|null,
     *     DestinationPosition: list<double>,
     *     DistanceUnit?: 'Kilometers'|'Miles'|null,
     *     IncludeLegGeometry?: bool|null,
     *     Key?: string|null,
     *     TravelMode?: 'Car'|'Truck'|'Walking'|'Bicycle'|'Motorcycle'|null,
     *     TruckModeOptions?: Shapes\CalculateRouteTruckModeOptions|null,
     *     WaypointPositions?: list<list<double>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
