<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRouteMatrix;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CalculatorName
 * @property list<list<double>> $DeparturePositions
 * @property list<list<double>> $DestinationPositions
 * @property 'Car'|'Truck'|'Walking'|'Bicycle'|'Motorcycle'|null $TravelMode
 * @property \Aws\Api\DateTimeResult|null $DepartureTime
 * @property bool|null $DepartNow
 * @property 'Kilometers'|'Miles'|null $DistanceUnit
 * @property Shapes\CalculateRouteCarModeOptions|null $CarModeOptions
 * @property Shapes\CalculateRouteTruckModeOptions|null $TruckModeOptions
 * @property string|null $Key
 */
class CalculateRouteMatrixRequest extends Request
{
    /**
     * @param array{
     *     CalculatorName: string,
     *     DeparturePositions: list<list<double>>,
     *     DestinationPositions: list<list<double>>,
     *     TravelMode?: 'Car'|'Truck'|'Walking'|'Bicycle'|'Motorcycle'|null,
     *     DepartureTime?: \Aws\Api\DateTimeResult|null,
     *     DepartNow?: bool|null,
     *     DistanceUnit?: 'Kilometers'|'Miles'|null,
     *     CarModeOptions?: Shapes\CalculateRouteCarModeOptions|null,
     *     TruckModeOptions?: Shapes\CalculateRouteTruckModeOptions|null,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
