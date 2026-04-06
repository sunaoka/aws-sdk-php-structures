<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string|null $clientToken
 * @property string|null $template
 * @property 'JSON'|'YAML'|null $templateType
 * @property int<0, 100> $priority
 * @property array<string, Shapes\JobParameter>|null $parameters
 * @property Shapes\Attachments|null $attachments
 * @property string|null $storageProfileId
 * @property 'READY'|'SUSPENDED'|null $targetTaskRunStatus
 * @property int<0, 2147483647>|null $maxFailedTasksCount
 * @property int<0, 2147483647>|null $maxRetriesPerTask
 * @property string|null $sourceJobId
 */
class CreateJobRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     clientToken?: string|null,
     *     template?: string|null,
     *     templateType?: 'JSON'|'YAML'|null,
     *     priority: int<0, 100>,
     *     parameters?: array<string, Shapes\JobParameter>|null,
     *     attachments?: Shapes\Attachments|null,
     *     storageProfileId?: string|null,
     *     targetTaskRunStatus?: 'READY'|'SUSPENDED'|null,
     *     maxFailedTasksCount?: int<0, 2147483647>|null,
     *     maxRetriesPerTask?: int<0, 2147483647>|null,
     *     sourceJobId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
