<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $AvailableSeats
 * @property string|null $Category
 * @property string|null $Color
 * @property 'Electric'|'InternalCombustion'|'PluginHybrid'|null $Engine
 * @property string|null $LicensePlate
 * @property 'All'|'Car' $Mode
 * @property string|null $Model
 * @property string|null $Name
 * @property string|null $TextColor
 */
class RouteRentalTransportModeDetails extends Shape
{
    /**
     * @param array{
     *     AvailableSeats?: int<0, max>|null,
     *     Category?: string|null,
     *     Color?: string|null,
     *     Engine?: 'Electric'|'InternalCombustion'|'PluginHybrid'|null,
     *     LicensePlate?: string|null,
     *     Mode: 'All'|'Car',
     *     Model?: string|null,
     *     Name?: string|null,
     *     TextColor?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
