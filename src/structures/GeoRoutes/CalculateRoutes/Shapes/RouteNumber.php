<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'East'|'North'|'South'|'West' $Direction
 * @property string $Language
 * @property string $Value
 */
class RouteNumber extends Shape
{
    /**
     * @param array{
     *     Direction?: 'East'|'North'|'South'|'West',
     *     Language?: string,
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
