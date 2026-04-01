<?php

namespace Sunaoka\Aws\Structures\Deadline\GetQueueLimitAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $queueId
 * @property string $limitId
 * @property 'ACTIVE'|'STOP_LIMIT_USAGE_AND_COMPLETE_TASKS'|'STOP_LIMIT_USAGE_AND_CANCEL_TASKS'|'STOPPED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class GetQueueLimitAssociationResponse extends Response
{
}
