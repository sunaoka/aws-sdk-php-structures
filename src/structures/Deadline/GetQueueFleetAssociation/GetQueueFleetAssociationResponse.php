<?php

namespace Sunaoka\Aws\Structures\Deadline\GetQueueFleetAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $queueId
 * @property string $fleetId
 * @property 'ACTIVE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS'|'STOPPED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 */
class GetQueueFleetAssociationResponse extends Response
{
}
