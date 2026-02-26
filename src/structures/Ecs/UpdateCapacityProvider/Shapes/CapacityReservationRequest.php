<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $reservationGroupArn
 * @property 'RESERVATIONS_ONLY'|'RESERVATIONS_FIRST'|'RESERVATIONS_EXCLUDED'|null $reservationPreference
 */
class CapacityReservationRequest extends Shape
{
    /**
     * @param array{
     *     reservationGroupArn?: string|null,
     *     reservationPreference?: 'RESERVATIONS_ONLY'|'RESERVATIONS_FIRST'|'RESERVATIONS_EXCLUDED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
