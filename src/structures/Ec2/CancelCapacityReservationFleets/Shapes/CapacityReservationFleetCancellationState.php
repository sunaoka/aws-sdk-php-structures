<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelCapacityReservationFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'submitted'|'modifying'|'active'|'partially_fulfilled'|'expiring'|'expired'|'cancelling'|'cancelled'|'failed' $CurrentFleetState
 * @property 'submitted'|'modifying'|'active'|'partially_fulfilled'|'expiring'|'expired'|'cancelling'|'cancelled'|'failed' $PreviousFleetState
 * @property string $CapacityReservationFleetId
 */
class CapacityReservationFleetCancellationState extends Shape
{
    /**
     * @param array{
     *     CurrentFleetState?: 'submitted'|'modifying'|'active'|'partially_fulfilled'|'expiring'|'expired'|'cancelling'|'cancelled'|'failed',
     *     PreviousFleetState?: 'submitted'|'modifying'|'active'|'partially_fulfilled'|'expiring'|'expired'|'cancelling'|'cancelled'|'failed',
     *     CapacityReservationFleetId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
