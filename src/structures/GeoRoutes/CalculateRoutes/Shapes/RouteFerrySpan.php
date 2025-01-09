<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Country
 * @property int $Distance
 * @property int $Duration
 * @property int $GeometryOffset
 * @property list<LocalizedString> $Names
 * @property string $Region
 */
class RouteFerrySpan extends Shape
{
    /**
     * @param array{
     *     Country?: string,
     *     Distance?: int,
     *     Duration?: int,
     *     GeometryOffset?: int,
     *     Names?: list<LocalizedString>,
     *     Region?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
