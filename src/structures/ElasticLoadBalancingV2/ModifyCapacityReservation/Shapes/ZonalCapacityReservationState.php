<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyCapacityReservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CapacityReservationStatus|null $State
 * @property string|null $AvailabilityZone
 * @property double|null $EffectiveCapacityUnits
 */
class ZonalCapacityReservationState extends Shape
{
    /**
     * @param array{
     *     State?: CapacityReservationStatus|null,
     *     AvailabilityZone?: string|null,
     *     EffectiveCapacityUnits?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
