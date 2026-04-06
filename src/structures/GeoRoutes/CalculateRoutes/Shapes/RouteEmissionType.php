<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Co2EmissionClass
 * @property string $Type
 */
class RouteEmissionType extends Shape
{
    /**
     * @param array{
     *     Co2EmissionClass?: string|null,
     *     Type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
