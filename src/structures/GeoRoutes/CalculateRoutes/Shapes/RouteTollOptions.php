<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AllTransponders
 * @property bool $AllVignettes
 * @property string $Currency
 * @property RouteEmissionType $EmissionType
 * @property 'Minibus' $VehicleCategory
 */
class RouteTollOptions extends Shape
{
    /**
     * @param array{
     *     AllTransponders?: bool,
     *     AllVignettes?: bool,
     *     Currency?: string,
     *     EmissionType?: RouteEmissionType,
     *     VehicleCategory?: 'Minibus'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
