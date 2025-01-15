<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelCapacityReservationFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CapacityReservationFleetId
 * @property CancelCapacityReservationFleetError|null $CancelCapacityReservationFleetError
 */
class FailedCapacityReservationFleetCancellationResult extends Shape
{
    /**
     * @param array{
     *     CapacityReservationFleetId?: string|null,
     *     CancelCapacityReservationFleetError?: CancelCapacityReservationFleetError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
