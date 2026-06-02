<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'AerialTramway'|'Airplane'|'All'|'Bus'|'BusRapidTransit'|'CityTrain'|'Ferry'|'FunicularRailway'|'HighSpeedTrain'|'IntercityTrain'|'InterregionalTrain'|'LightRail'|'Monorail'|'PrivateBus'|'RegionalTrain'|'Subway'>|null $AllowedModes
 * @property list<'FirstLeg'|'LastLeg'|'EntireRoute'|'None'>|null $EnabledFor
 * @property list<'AerialTramway'|'Airplane'|'All'|'Bus'|'BusRapidTransit'|'CityTrain'|'Ferry'|'FunicularRailway'|'HighSpeedTrain'|'IntercityTrain'|'InterregionalTrain'|'LightRail'|'Monorail'|'PrivateBus'|'RegionalTrain'|'Subway'>|null $ExcludedModes
 */
class RouteIntermodalTransitOptions extends Shape
{
    /**
     * @param array{
     *     AllowedModes?: list<'AerialTramway'|'Airplane'|'All'|'Bus'|'BusRapidTransit'|'CityTrain'|'Ferry'|'FunicularRailway'|'HighSpeedTrain'|'IntercityTrain'|'InterregionalTrain'|'LightRail'|'Monorail'|'PrivateBus'|'RegionalTrain'|'Subway'>|null,
     *     EnabledFor?: list<'FirstLeg'|'LastLeg'|'EntireRoute'|'None'>|null,
     *     ExcludedModes?: list<'AerialTramway'|'Airplane'|'All'|'Bus'|'BusRapidTransit'|'CityTrain'|'Ferry'|'FunicularRailway'|'HighSpeedTrain'|'IntercityTrain'|'InterregionalTrain'|'LightRail'|'Monorail'|'PrivateBus'|'RegionalTrain'|'Subway'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
