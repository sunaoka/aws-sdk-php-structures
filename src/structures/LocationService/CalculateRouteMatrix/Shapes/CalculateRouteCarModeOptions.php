<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AvoidFerries
 * @property bool|null $AvoidTolls
 */
class CalculateRouteCarModeOptions extends Shape
{
    /**
     * @param array{
     *     AvoidFerries?: bool|null,
     *     AvoidTolls?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
