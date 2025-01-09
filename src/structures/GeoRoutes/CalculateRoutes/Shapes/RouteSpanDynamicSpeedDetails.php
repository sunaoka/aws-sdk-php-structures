<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $BestCaseSpeed
 * @property int<0, 4294967295> $TurnDuration
 * @property double $TypicalSpeed
 */
class RouteSpanDynamicSpeedDetails extends Shape
{
    /**
     * @param array{
     *     BestCaseSpeed?: double,
     *     TurnDuration?: int<0, 4294967295>,
     *     TypicalSpeed?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
