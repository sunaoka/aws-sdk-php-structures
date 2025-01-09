<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Country
 * @property int<0, 4294967295> $Distance
 * @property int<0, 4294967295> $Duration
 * @property int<0, max> $GeometryOffset
 * @property list<LocalizedString> $Names
 * @property string $Region
 */
class RouteFerrySpan extends Shape
{
    /**
     * @param array{
     *     Country?: string,
     *     Distance?: int<0, 4294967295>,
     *     Duration?: int<0, 4294967295>,
     *     GeometryOffset?: int<0, max>,
     *     Names?: list<LocalizedString>,
     *     Region?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
