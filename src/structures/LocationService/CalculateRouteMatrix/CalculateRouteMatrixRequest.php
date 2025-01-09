<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRouteMatrix;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CalculatorName
 * @property list<list<double>> $DeparturePositions
 * @property list<list<double>> $DestinationPositions
 * @property 'Car'|'Truck'|'Walking'|'Bicycle'|'Motorcycle' $TravelMode
 * @property \Aws\Api\DateTimeResult $DepartureTime
 * @property bool $DepartNow
 * @property 'Kilometers'|'Miles' $DistanceUnit
 * @property Shapes\CalculateRouteCarModeOptions $CarModeOptions
 * @property Shapes\CalculateRouteTruckModeOptions $TruckModeOptions
 * @property string $Key
 */
class CalculateRouteMatrixRequest extends Request
{
    /**
     * @param array{
     *     CalculatorName: string,
     *     DeparturePositions: list<list<double>>,
     *     DestinationPositions: list<list<double>>,
     *     TravelMode?: 'Car'|'Truck'|'Walking'|'Bicycle'|'Motorcycle',
     *     DepartureTime?: \Aws\Api\DateTimeResult,
     *     DepartNow?: bool,
     *     DistanceUnit?: 'Kilometers'|'Miles',
     *     CarModeOptions?: Shapes\CalculateRouteCarModeOptions,
     *     TruckModeOptions?: Shapes\CalculateRouteTruckModeOptions,
     *     Key?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
