<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $BestCaseSpeed
 * @property int<0, 4294967295>|null $TurnDuration
 * @property double|null $TypicalSpeed
 */
class RouteSpanDynamicSpeedDetails extends Shape
{
    /**
     * @param array{
     *     BestCaseSpeed?: double|null,
     *     TurnDuration?: int<0, 4294967295>|null,
     *     TypicalSpeed?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
