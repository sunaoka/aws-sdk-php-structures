<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $farmId
 * @property string $displayName
 * @property string|null $description
 * @property 'NONE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS'|null $defaultBudgetAction
 * @property Shapes\JobAttachmentSettings|null $jobAttachmentSettings
 * @property string|null $roleArn
 * @property Shapes\JobRunAsUser|null $jobRunAsUser
 * @property list<string>|null $requiredFileSystemLocationNames
 * @property list<string>|null $allowedStorageProfileIds
 * @property array<string, string>|null $tags
 */
class CreateQueueRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     farmId: string,
     *     displayName: string,
     *     description?: string|null,
     *     defaultBudgetAction?: 'NONE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS'|null,
     *     jobAttachmentSettings?: Shapes\JobAttachmentSettings|null,
     *     roleArn?: string|null,
     *     jobRunAsUser?: Shapes\JobRunAsUser|null,
     *     requiredFileSystemLocationNames?: list<string>|null,
     *     allowedStorageProfileIds?: list<string>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
