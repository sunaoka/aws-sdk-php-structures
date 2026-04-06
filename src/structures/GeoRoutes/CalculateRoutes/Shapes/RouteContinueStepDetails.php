<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LocalizedString> $Intersection
 */
class RouteContinueStepDetails extends Shape
{
    /**
     * @param array{Intersection: list<LocalizedString>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
