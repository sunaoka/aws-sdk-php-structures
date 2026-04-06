<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AllTransponders
 * @property bool|null $AllVignettes
 * @property string|null $Currency
 * @property RouteEmissionType|null $EmissionType
 * @property 'Minibus'|null $VehicleCategory
 */
class RouteTollOptions extends Shape
{
    /**
     * @param array{
     *     AllTransponders?: bool|null,
     *     AllVignettes?: bool|null,
     *     Currency?: string|null,
     *     EmissionType?: RouteEmissionType|null,
     *     VehicleCategory?: 'Minibus'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
