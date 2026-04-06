<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\IsolineAllowOptions|null $Allow
 * @property string|null $ArrivalTime
 * @property Shapes\IsolineAvoidanceOptions|null $Avoid
 * @property bool|null $DepartNow
 * @property string|null $DepartureTime
 * @property list<double>|null $Destination
 * @property Shapes\IsolineDestinationOptions|null $DestinationOptions
 * @property 'FlexiblePolyline'|'Simple'|null $IsolineGeometryFormat
 * @property Shapes\IsolineGranularityOptions|null $IsolineGranularity
 * @property string|null $Key
 * @property 'AccurateCalculation'|'BalancedCalculation'|'FastCalculation'|null $OptimizeIsolineFor
 * @property 'FastestRoute'|'ShortestRoute'|null $OptimizeRoutingFor
 * @property list<double>|null $Origin
 * @property Shapes\IsolineOriginOptions|null $OriginOptions
 * @property Shapes\IsolineThresholds $Thresholds
 * @property Shapes\IsolineTrafficOptions|null $Traffic
 * @property 'Car'|'Pedestrian'|'Scooter'|'Truck'|null $TravelMode
 * @property Shapes\IsolineTravelModeOptions|null $TravelModeOptions
 */
class CalculateIsolinesRequest extends Request
{
    /**
     * @param array{
     *     Allow?: Shapes\IsolineAllowOptions|null,
     *     ArrivalTime?: string|null,
     *     Avoid?: Shapes\IsolineAvoidanceOptions|null,
     *     DepartNow?: bool|null,
     *     DepartureTime?: string|null,
     *     Destination?: list<double>|null,
     *     DestinationOptions?: Shapes\IsolineDestinationOptions|null,
     *     IsolineGeometryFormat?: 'FlexiblePolyline'|'Simple'|null,
     *     IsolineGranularity?: Shapes\IsolineGranularityOptions|null,
     *     Key?: string|null,
     *     OptimizeIsolineFor?: 'AccurateCalculation'|'BalancedCalculation'|'FastCalculation'|null,
     *     OptimizeRoutingFor?: 'FastestRoute'|'ShortestRoute'|null,
     *     Origin?: list<double>|null,
     *     OriginOptions?: Shapes\IsolineOriginOptions|null,
     *     Thresholds: Shapes\IsolineThresholds,
     *     Traffic?: Shapes\IsolineTrafficOptions|null,
     *     TravelMode?: 'Car'|'Pedestrian'|'Scooter'|'Truck'|null,
     *     TravelModeOptions?: Shapes\IsolineTravelModeOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
