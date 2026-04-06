<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRouteMatrix;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CalculatorName
 * @property Shapes\CalculateRouteCarModeOptions|null $CarModeOptions
 * @property bool|null $DepartNow
 * @property list<list<double>> $DeparturePositions
 * @property \Aws\Api\DateTimeResult|null $DepartureTime
 * @property list<list<double>> $DestinationPositions
 * @property 'Kilometers'|'Miles'|null $DistanceUnit
 * @property string|null $Key
 * @property 'Car'|'Truck'|'Walking'|'Bicycle'|'Motorcycle'|null $TravelMode
 * @property Shapes\CalculateRouteTruckModeOptions|null $TruckModeOptions
 */
class CalculateRouteMatrixRequest extends Request
{
    /**
     * @param array{
     *     CalculatorName: string,
     *     CarModeOptions?: Shapes\CalculateRouteCarModeOptions|null,
     *     DepartNow?: bool|null,
     *     DeparturePositions: list<list<double>>,
     *     DepartureTime?: \Aws\Api\DateTimeResult|null,
     *     DestinationPositions: list<list<double>>,
     *     DistanceUnit?: 'Kilometers'|'Miles'|null,
     *     Key?: string|null,
     *     TravelMode?: 'Car'|'Truck'|'Walking'|'Bicycle'|'Motorcycle'|null,
     *     TruckModeOptions?: Shapes\CalculateRouteTruckModeOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
