<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $farmId
 * @property string $queueId
 * @property string|null $displayName
 * @property string|null $description
 * @property 'NONE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS'|null $defaultBudgetAction
 * @property Shapes\JobAttachmentSettings|null $jobAttachmentSettings
 * @property string|null $roleArn
 * @property Shapes\JobRunAsUser|null $jobRunAsUser
 * @property list<string>|null $requiredFileSystemLocationNamesToAdd
 * @property list<string>|null $requiredFileSystemLocationNamesToRemove
 * @property list<string>|null $allowedStorageProfileIdsToAdd
 * @property list<string>|null $allowedStorageProfileIdsToRemove
 */
class UpdateQueueRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     farmId: string,
     *     queueId: string,
     *     displayName?: string|null,
     *     description?: string|null,
     *     defaultBudgetAction?: 'NONE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS'|null,
     *     jobAttachmentSettings?: Shapes\JobAttachmentSettings|null,
     *     roleArn?: string|null,
     *     jobRunAsUser?: Shapes\JobRunAsUser|null,
     *     requiredFileSystemLocationNamesToAdd?: list<string>|null,
     *     requiredFileSystemLocationNamesToRemove?: list<string>|null,
     *     allowedStorageProfileIdsToAdd?: list<string>|null,
     *     allowedStorageProfileIdsToRemove?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
