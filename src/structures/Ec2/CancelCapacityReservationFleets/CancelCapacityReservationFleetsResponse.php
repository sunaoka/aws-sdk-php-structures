<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelCapacityReservationFleets;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\CapacityReservationFleetCancellationState>|null $SuccessfulFleetCancellations
 * @property list<Shapes\FailedCapacityReservationFleetCancellationResult>|null $FailedFleetCancellations
 */
class CancelCapacityReservationFleetsResponse extends Response
{
}
