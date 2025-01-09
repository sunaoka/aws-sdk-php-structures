<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelSpotFleetRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'submitted'|'active'|'cancelled'|'failed'|'cancelled_running'|'cancelled_terminating'|'modifying' $CurrentSpotFleetRequestState
 * @property 'submitted'|'active'|'cancelled'|'failed'|'cancelled_running'|'cancelled_terminating'|'modifying' $PreviousSpotFleetRequestState
 * @property string $SpotFleetRequestId
 */
class CancelSpotFleetRequestsSuccessItem extends Shape
{
    /**
     * @param array{
     *     CurrentSpotFleetRequestState?: 'submitted'|'active'|'cancelled'|'failed'|'cancelled_running'|'cancelled_terminating'|'modifying',
     *     PreviousSpotFleetRequestState?: 'submitted'|'active'|'cancelled'|'failed'|'cancelled_running'|'cancelled_terminating'|'modifying',
     *     SpotFleetRequestId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
