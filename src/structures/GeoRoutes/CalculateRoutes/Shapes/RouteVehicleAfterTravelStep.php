<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteChargeStepDetails|null $ChargeStepDetails
 * @property int<0, 4294967295> $Duration
 * @property string|null $Instruction
 * @property 'Park' $Type
 */
class RouteVehicleAfterTravelStep extends Shape
{
    /**
     * @param array{
     *     ChargeStepDetails?: RouteChargeStepDetails|null,
     *     Duration: int<0, 4294967295>,
     *     Instruction?: string|null,
     *     Type: 'Park'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
