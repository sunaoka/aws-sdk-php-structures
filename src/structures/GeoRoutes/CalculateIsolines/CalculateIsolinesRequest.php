<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\IsolineAllowOptions $Allow
 * @property string $ArrivalTime
 * @property Shapes\IsolineAvoidanceOptions $Avoid
 * @property bool $DepartNow
 * @property string $DepartureTime
 * @property list<double> $Destination
 * @property Shapes\IsolineDestinationOptions $DestinationOptions
 * @property 'FlexiblePolyline'|'Simple' $IsolineGeometryFormat
 * @property Shapes\IsolineGranularityOptions $IsolineGranularity
 * @property string $Key
 * @property 'AccurateCalculation'|'BalancedCalculation'|'FastCalculation' $OptimizeIsolineFor
 * @property 'FastestRoute'|'ShortestRoute' $OptimizeRoutingFor
 * @property list<double> $Origin
 * @property Shapes\IsolineOriginOptions $OriginOptions
 * @property Shapes\IsolineThresholds $Thresholds
 * @property Shapes\IsolineTrafficOptions $Traffic
 * @property 'Car'|'Pedestrian'|'Scooter'|'Truck' $TravelMode
 * @property Shapes\IsolineTravelModeOptions $TravelModeOptions
 */
class CalculateIsolinesRequest extends Request
{
    /**
     * @param array{
     *     Allow?: Shapes\IsolineAllowOptions,
     *     ArrivalTime?: string,
     *     Avoid?: Shapes\IsolineAvoidanceOptions,
     *     DepartNow?: bool,
     *     DepartureTime?: string,
     *     Destination?: list<double>,
     *     DestinationOptions?: Shapes\IsolineDestinationOptions,
     *     IsolineGeometryFormat?: 'FlexiblePolyline'|'Simple',
     *     IsolineGranularity?: Shapes\IsolineGranularityOptions,
     *     Key?: string,
     *     OptimizeIsolineFor?: 'AccurateCalculation'|'BalancedCalculation'|'FastCalculation',
     *     OptimizeRoutingFor?: 'FastestRoute'|'ShortestRoute',
     *     Origin?: list<double>,
     *     OriginOptions?: Shapes\IsolineOriginOptions,
     *     Thresholds: Shapes\IsolineThresholds,
     *     Traffic?: Shapes\IsolineTrafficOptions,
     *     TravelMode?: 'Car'|'Pedestrian'|'Scooter'|'Truck',
     *     TravelModeOptions?: Shapes\IsolineTravelModeOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
