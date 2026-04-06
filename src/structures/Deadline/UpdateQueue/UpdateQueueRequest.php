<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $allowedStorageProfileIdsToAdd
 * @property list<string>|null $allowedStorageProfileIdsToRemove
 * @property string|null $clientToken
 * @property 'NONE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS'|null $defaultBudgetAction
 * @property string|null $description
 * @property string|null $displayName
 * @property string $farmId
 * @property Shapes\JobAttachmentSettings|null $jobAttachmentSettings
 * @property Shapes\JobRunAsUser|null $jobRunAsUser
 * @property string $queueId
 * @property list<string>|null $requiredFileSystemLocationNamesToAdd
 * @property list<string>|null $requiredFileSystemLocationNamesToRemove
 * @property string|null $roleArn
 */
class UpdateQueueRequest extends Request
{
    /**
     * @param array{
     *     allowedStorageProfileIdsToAdd?: list<string>|null,
     *     allowedStorageProfileIdsToRemove?: list<string>|null,
     *     clientToken?: string|null,
     *     defaultBudgetAction?: 'NONE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS'|null,
     *     description?: string|null,
     *     displayName?: string|null,
     *     farmId: string,
     *     jobAttachmentSettings?: Shapes\JobAttachmentSettings|null,
     *     jobRunAsUser?: Shapes\JobRunAsUser|null,
     *     queueId: string,
     *     requiredFileSystemLocationNamesToAdd?: list<string>|null,
     *     requiredFileSystemLocationNamesToRemove?: list<string>|null,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
