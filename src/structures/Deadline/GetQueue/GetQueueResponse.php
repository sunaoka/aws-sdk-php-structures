<?php

namespace Sunaoka\Aws\Structures\Deadline\GetQueue;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $queueId
 * @property string $displayName
 * @property string $description
 * @property string $farmId
 * @property 'IDLE'|'SCHEDULING'|'SCHEDULING_BLOCKED' $status
 * @property 'NONE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS' $defaultBudgetAction
 * @property 'NO_BUDGET_CONFIGURED'|'BUDGET_THRESHOLD_REACHED' $blockedReason
 * @property Shapes\JobAttachmentSettings $jobAttachmentSettings
 * @property string $roleArn
 * @property list<string> $requiredFileSystemLocationNames
 * @property list<string> $allowedStorageProfileIds
 * @property Shapes\JobRunAsUser $jobRunAsUser
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 */
class GetQueueResponse extends Response
{
}
