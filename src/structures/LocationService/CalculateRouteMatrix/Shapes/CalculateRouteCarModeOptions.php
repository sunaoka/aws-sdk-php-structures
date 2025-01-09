<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AvoidFerries
 * @property bool $AvoidTolls
 */
class CalculateRouteCarModeOptions extends Shape
{
    /**
     * @param array{
     *     AvoidFerries?: bool,
     *     AvoidTolls?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
