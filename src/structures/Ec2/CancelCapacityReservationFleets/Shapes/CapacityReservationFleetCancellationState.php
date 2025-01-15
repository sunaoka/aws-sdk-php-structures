<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelCapacityReservationFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'submitted'|'modifying'|'active'|'partially_fulfilled'|'expiring'|'expired'|'cancelling'|'cancelled'|'failed'|null $CurrentFleetState
 * @property 'submitted'|'modifying'|'active'|'partially_fulfilled'|'expiring'|'expired'|'cancelling'|'cancelled'|'failed'|null $PreviousFleetState
 * @property string|null $CapacityReservationFleetId
 */
class CapacityReservationFleetCancellationState extends Shape
{
    /**
     * @param array{
     *     CurrentFleetState?: 'submitted'|'modifying'|'active'|'partially_fulfilled'|'expiring'|'expired'|'cancelling'|'cancelled'|'failed'|null,
     *     PreviousFleetState?: 'submitted'|'modifying'|'active'|'partially_fulfilled'|'expiring'|'expired'|'cancelling'|'cancelled'|'failed'|null,
     *     CapacityReservationFleetId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
