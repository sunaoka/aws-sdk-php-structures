<?php

namespace Sunaoka\Aws\Structures\Deadline\GetQueueFleetAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $fleetId
 * @property string $queueId
 * @property 'ACTIVE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS'|'STOPPED' $status
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class GetQueueFleetAssociationResponse extends Response
{
}
