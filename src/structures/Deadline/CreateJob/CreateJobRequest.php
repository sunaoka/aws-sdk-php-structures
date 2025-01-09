<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $clientToken
 * @property string $template
 * @property 'JSON'|'YAML' $templateType
 * @property int<0, 100> $priority
 * @property array<string, Shapes\JobParameter> $parameters
 * @property Shapes\Attachments $attachments
 * @property string $storageProfileId
 * @property 'READY'|'SUSPENDED' $targetTaskRunStatus
 * @property int<0, 2147483647> $maxFailedTasksCount
 * @property int<0, 2147483647> $maxRetriesPerTask
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
     *     priority: int<0, 100>,
     *     parameters?: array<string, Shapes\JobParameter>,
     *     attachments?: Shapes\Attachments,
     *     storageProfileId?: string,
     *     targetTaskRunStatus?: 'READY'|'SUSPENDED',
     *     maxFailedTasksCount?: int<0, 2147483647>,
     *     maxRetriesPerTask?: int<0, 2147483647>,
     *     sourceJobId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
