<?php

namespace Sunaoka\Aws\Structures\Deadline\GetQueue;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $displayName
 * @property 'IDLE'|'SCHEDULING'|'SCHEDULING_BLOCKED' $status
 * @property 'NONE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS' $defaultBudgetAction
 * @property 'NO_BUDGET_CONFIGURED'|'BUDGET_THRESHOLD_REACHED'|null $blockedReason
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property string|null $description
 * @property Shapes\JobAttachmentSettings|null $jobAttachmentSettings
 * @property string|null $roleArn
 * @property list<string>|null $requiredFileSystemLocationNames
 * @property list<string>|null $allowedStorageProfileIds
 * @property Shapes\JobRunAsUser|null $jobRunAsUser
 * @property Shapes\SchedulingConfiguration|null $schedulingConfiguration
 */
class GetQueueResponse extends Response
{
}
