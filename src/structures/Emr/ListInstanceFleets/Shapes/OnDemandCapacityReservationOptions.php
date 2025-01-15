<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'use-capacity-reservations-first'|null $UsageStrategy
 * @property 'open'|'none'|null $CapacityReservationPreference
 * @property string|null $CapacityReservationResourceGroupArn
 */
class OnDemandCapacityReservationOptions extends Shape
{
    /**
     * @param array{
     *     UsageStrategy?: 'use-capacity-reservations-first'|null,
     *     CapacityReservationPreference?: 'open'|'none'|null,
     *     CapacityReservationResourceGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
