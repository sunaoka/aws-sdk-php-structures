<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteAccessibilityAvailabilityDetails|null $Accessibility
 * @property string|null $Color
 * @property string|null $Headsign
 * @property string|null $LongRouteName
 * @property 'AerialTramway'|'Airplane'|'All'|'Bus'|'BusRapidTransit'|'CityTrain'|'Ferry'|'FunicularRailway'|'HighSpeedTrain'|'IntercityTrain'|'InterregionalTrain'|'LightRail'|'Monorail'|'PrivateBus'|'RegionalTrain'|'Subway' $Mode
 * @property string|null $RouteName
 * @property string|null $ShortRouteName
 * @property string|null $TextColor
 */
class RouteTransitTransportModeDetails extends Shape
{
    /**
     * @param array{
     *     Accessibility?: RouteAccessibilityAvailabilityDetails|null,
     *     Color?: string|null,
     *     Headsign?: string|null,
     *     LongRouteName?: string|null,
     *     Mode: 'AerialTramway'|'Airplane'|'All'|'Bus'|'BusRapidTransit'|'CityTrain'|'Ferry'|'FunicularRailway'|'HighSpeedTrain'|'IntercityTrain'|'InterregionalTrain'|'LightRail'|'Monorail'|'PrivateBus'|'RegionalTrain'|'Subway',
     *     RouteName?: string|null,
     *     ShortRouteName?: string|null,
     *     TextColor?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
