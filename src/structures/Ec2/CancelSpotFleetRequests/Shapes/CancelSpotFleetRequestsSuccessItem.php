<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelSpotFleetRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'submitted'|'active'|'cancelled'|'failed'|'cancelled_running'|'cancelled_terminating'|'modifying'|null $CurrentSpotFleetRequestState
 * @property 'submitted'|'active'|'cancelled'|'failed'|'cancelled_running'|'cancelled_terminating'|'modifying'|null $PreviousSpotFleetRequestState
 * @property string|null $SpotFleetRequestId
 */
class CancelSpotFleetRequestsSuccessItem extends Shape
{
    /**
     * @param array{
     *     CurrentSpotFleetRequestState?: 'submitted'|'active'|'cancelled'|'failed'|'cancelled_running'|'cancelled_terminating'|'modifying'|null,
     *     PreviousSpotFleetRequestState?: 'submitted'|'active'|'cancelled'|'failed'|'cancelled_running'|'cancelled_terminating'|'modifying'|null,
     *     SpotFleetRequestId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
