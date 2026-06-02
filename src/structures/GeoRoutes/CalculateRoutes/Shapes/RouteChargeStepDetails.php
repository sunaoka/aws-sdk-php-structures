<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $ArrivalCharge
 * @property double|null $ConsumablePower
 * @property double|null $DesiredCharge
 */
class RouteChargeStepDetails extends Shape
{
    /**
     * @param array{
     *     ArrivalCharge?: double|null,
     *     ConsumablePower?: double|null,
     *     DesiredCharge?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
