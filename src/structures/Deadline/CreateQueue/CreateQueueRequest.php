<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $allowedStorageProfileIds
 * @property string|null $clientToken
 * @property 'NONE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS'|null $defaultBudgetAction
 * @property string|null $description
 * @property string $displayName
 * @property string $farmId
 * @property Shapes\JobAttachmentSettings|null $jobAttachmentSettings
 * @property Shapes\JobRunAsUser|null $jobRunAsUser
 * @property list<string>|null $requiredFileSystemLocationNames
 * @property string|null $roleArn
 * @property array<string, string>|null $tags
 */
class CreateQueueRequest extends Request
{
    /**
     * @param array{
     *     allowedStorageProfileIds?: list<string>|null,
     *     clientToken?: string|null,
     *     defaultBudgetAction?: 'NONE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS'|null,
     *     description?: string|null,
     *     displayName: string,
     *     farmId: string,
     *     jobAttachmentSettings?: Shapes\JobAttachmentSettings|null,
     *     jobRunAsUser?: Shapes\JobRunAsUser|null,
     *     requiredFileSystemLocationNames?: list<string>|null,
     *     roleArn?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
