<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $farmId
 * @property string $displayName
 * @property string $description
 * @property 'NONE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS' $defaultBudgetAction
 * @property Shapes\JobAttachmentSettings $jobAttachmentSettings
 * @property string $roleArn
 * @property Shapes\JobRunAsUser $jobRunAsUser
 * @property list<string> $requiredFileSystemLocationNames
 * @property list<string> $allowedStorageProfileIds
 * @property array<string, string> $tags
 */
class CreateQueueRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     farmId: string,
     *     displayName: string,
     *     description?: string,
     *     defaultBudgetAction?: 'NONE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS',
     *     jobAttachmentSettings?: Shapes\JobAttachmentSettings,
     *     roleArn?: string,
     *     jobRunAsUser?: Shapes\JobRunAsUser,
     *     requiredFileSystemLocationNames?: list<string>,
     *     allowedStorageProfileIds?: list<string>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
