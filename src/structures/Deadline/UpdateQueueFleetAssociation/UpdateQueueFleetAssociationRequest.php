<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateQueueFleetAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $fleetId
 * @property 'ACTIVE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS' $status
 */
class UpdateQueueFleetAssociationRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     fleetId: string,
     *     status: 'ACTIVE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
