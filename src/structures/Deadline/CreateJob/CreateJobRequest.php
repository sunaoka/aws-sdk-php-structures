<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $clientToken
 * @property string $template
 * @property 'JSON'|'YAML' $templateType
 * @property int $priority
 * @property array<string, Shapes\JobParameter> $parameters
 * @property Shapes\Attachments $attachments
 * @property string $storageProfileId
 * @property 'READY'|'SUSPENDED' $targetTaskRunStatus
 * @property int $maxFailedTasksCount
 * @property int $maxRetriesPerTask
 * @property string $sourceJobId
 */
class CreateJobRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     clientToken?: string,
     *     template?: string,
     *     templateType?: 'JSON'|'YAML',
     *     priority: int,
     *     parameters?: array<string, Shapes\JobParameter>,
     *     attachments?: Shapes\Attachments,
     *     storageProfileId?: string,
     *     targetTaskRunStatus?: 'READY'|'SUSPENDED',
     *     maxFailedTasksCount?: int,
     *     maxRetriesPerTask?: int,
     *     sourceJobId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
