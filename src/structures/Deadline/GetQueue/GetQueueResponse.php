<?php

namespace Sunaoka\Aws\Structures\Deadline\GetQueue;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string>|null $allowedStorageProfileIds
 * @property 'NO_BUDGET_CONFIGURED'|'BUDGET_THRESHOLD_REACHED'|null $blockedReason
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property 'NONE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS' $defaultBudgetAction
 * @property string|null $description
 * @property string $displayName
 * @property string $farmId
 * @property Shapes\JobAttachmentSettings|null $jobAttachmentSettings
 * @property Shapes\JobRunAsUser|null $jobRunAsUser
 * @property string $queueId
 * @property list<string>|null $requiredFileSystemLocationNames
 * @property string|null $roleArn
 * @property 'IDLE'|'SCHEDULING'|'SCHEDULING_BLOCKED' $status
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class GetQueueResponse extends Response
{
}
