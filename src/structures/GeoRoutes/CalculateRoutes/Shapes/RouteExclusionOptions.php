<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Countries
 */
class RouteExclusionOptions extends Shape
{
    /**
     * @param array{Countries: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
