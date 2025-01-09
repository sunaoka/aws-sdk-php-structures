<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelCapacityReservationFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CapacityReservationFleetId
 * @property CancelCapacityReservationFleetError $CancelCapacityReservationFleetError
 */
class FailedCapacityReservationFleetCancellationResult extends Shape
{
    /**
     * @param array{
     *     CapacityReservationFleetId?: string,
     *     CancelCapacityReservationFleetError?: CancelCapacityReservationFleetError
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
