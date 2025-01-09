<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'use-capacity-reservations-first' $UsageStrategy
 * @property 'open'|'none' $CapacityReservationPreference
 * @property string $CapacityReservationResourceGroupArn
 */
class OnDemandCapacityReservationOptions extends Shape
{
    /**
     * @param array{
     *     UsageStrategy?: 'use-capacity-reservations-first',
     *     CapacityReservationPreference?: 'open'|'none',
     *     CapacityReservationResourceGroupArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
