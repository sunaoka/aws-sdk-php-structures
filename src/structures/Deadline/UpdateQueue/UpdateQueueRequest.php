<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $farmId
 * @property string $queueId
 * @property string $displayName
 * @property string $description
 * @property 'NONE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS' $defaultBudgetAction
 * @property Shapes\JobAttachmentSettings $jobAttachmentSettings
 * @property string $roleArn
 * @property Shapes\JobRunAsUser $jobRunAsUser
 * @property list<string> $requiredFileSystemLocationNamesToAdd
 * @property list<string> $requiredFileSystemLocationNamesToRemove
 * @property list<string> $allowedStorageProfileIdsToAdd
 * @property list<string> $allowedStorageProfileIdsToRemove
 */
class UpdateQueueRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     farmId: string,
     *     queueId: string,
     *     displayName?: string,
     *     description?: string,
     *     defaultBudgetAction?: 'NONE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS',
     *     jobAttachmentSettings?: Shapes\JobAttachmentSettings,
     *     roleArn?: string,
     *     jobRunAsUser?: Shapes\JobRunAsUser,
     *     requiredFileSystemLocationNamesToAdd?: list<string>,
     *     requiredFileSystemLocationNamesToRemove?: list<string>,
     *     allowedStorageProfileIdsToAdd?: list<string>,
     *     allowedStorageProfileIdsToRemove?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
