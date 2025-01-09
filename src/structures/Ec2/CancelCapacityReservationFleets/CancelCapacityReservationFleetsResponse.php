<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelCapacityReservationFleets;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\CapacityReservationFleetCancellationState> $SuccessfulFleetCancellations
 * @property list<Shapes\FailedCapacityReservationFleetCancellationResult> $FailedFleetCancellations
 */
class CancelCapacityReservationFleetsResponse extends Response
{
}
