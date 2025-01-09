<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyCapacityReservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CapacityReservationStatus $State
 * @property string $AvailabilityZone
 * @property double $EffectiveCapacityUnits
 */
class ZonalCapacityReservationState extends Shape
{
    /**
     * @param array{
     *     State?: CapacityReservationStatus,
     *     AvailabilityZone?: string,
     *     EffectiveCapacityUnits?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
