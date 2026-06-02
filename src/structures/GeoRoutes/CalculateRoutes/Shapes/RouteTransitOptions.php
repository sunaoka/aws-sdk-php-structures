<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'Wheelchair'>|null $AccessibilityAttributes
 * @property list<'AerialTramway'|'Airplane'|'All'|'Bus'|'BusRapidTransit'|'CityTrain'|'Ferry'|'FunicularRailway'|'HighSpeedTrain'|'IntercityTrain'|'InterregionalTrain'|'LightRail'|'Monorail'|'PrivateBus'|'RegionalTrain'|'Subway'>|null $AllowedModes
 * @property list<'AerialTramway'|'Airplane'|'All'|'Bus'|'BusRapidTransit'|'CityTrain'|'Ferry'|'FunicularRailway'|'HighSpeedTrain'|'IntercityTrain'|'InterregionalTrain'|'LightRail'|'Monorail'|'PrivateBus'|'RegionalTrain'|'Subway'>|null $ExcludedModes
 * @property int<0, 6>|null $MaxTransfers
 * @property RouteTransitPedestrianOptions|null $Pedestrian
 */
class RouteTransitOptions extends Shape
{
    /**
     * @param array{
     *     AccessibilityAttributes?: list<'Wheelchair'>|null,
     *     AllowedModes?: list<'AerialTramway'|'Airplane'|'All'|'Bus'|'BusRapidTransit'|'CityTrain'|'Ferry'|'FunicularRailway'|'HighSpeedTrain'|'IntercityTrain'|'InterregionalTrain'|'LightRail'|'Monorail'|'PrivateBus'|'RegionalTrain'|'Subway'>|null,
     *     ExcludedModes?: list<'AerialTramway'|'Airplane'|'All'|'Bus'|'BusRapidTransit'|'CityTrain'|'Ferry'|'FunicularRailway'|'HighSpeedTrain'|'IntercityTrain'|'InterregionalTrain'|'LightRail'|'Monorail'|'PrivateBus'|'RegionalTrain'|'Subway'>|null,
     *     MaxTransfers?: int<0, 6>|null,
     *     Pedestrian?: RouteTransitPedestrianOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
