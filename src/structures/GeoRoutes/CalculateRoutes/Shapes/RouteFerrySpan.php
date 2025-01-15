<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Country
 * @property int<0, 4294967295>|null $Distance
 * @property int<0, 4294967295>|null $Duration
 * @property int<0, max>|null $GeometryOffset
 * @property list<LocalizedString>|null $Names
 * @property string|null $Region
 */
class RouteFerrySpan extends Shape
{
    /**
     * @param array{
     *     Country?: string|null,
     *     Distance?: int<0, 4294967295>|null,
     *     Duration?: int<0, 4294967295>|null,
     *     GeometryOffset?: int<0, max>|null,
     *     Names?: list<LocalizedString>|null,
     *     Region?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
