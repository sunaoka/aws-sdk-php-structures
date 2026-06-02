<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'All'|'Car'>|null $AllowedModes
 * @property list<'FirstLeg'|'LastLeg'|'EntireRoute'|'None'>|null $EnabledFor
 * @property list<'All'|'Car'>|null $ExcludedModes
 */
class RouteIntermodalVehicleOptions extends Shape
{
    /**
     * @param array{
     *     AllowedModes?: list<'All'|'Car'>|null,
     *     EnabledFor?: list<'FirstLeg'|'LastLeg'|'EntireRoute'|'None'>|null,
     *     ExcludedModes?: list<'All'|'Car'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
