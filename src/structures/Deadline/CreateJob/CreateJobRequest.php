<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Attachments|null $attachments
 * @property string|null $clientToken
 * @property string $farmId
 * @property int<0, 2147483647>|null $maxFailedTasksCount
 * @property int<0, 2147483647>|null $maxRetriesPerTask
 * @property array<string, Shapes\JobParameter>|null $parameters
 * @property int<0, 100> $priority
 * @property string $queueId
 * @property string|null $storageProfileId
 * @property 'READY'|'SUSPENDED'|null $targetTaskRunStatus
 * @property string $template
 * @property 'JSON'|'YAML' $templateType
 */
class CreateJobRequest extends Request
{
    /**
     * @param array{
     *     attachments?: Shapes\Attachments|null,
     *     clientToken?: string|null,
     *     farmId: string,
     *     maxFailedTasksCount?: int<0, 2147483647>|null,
     *     maxRetriesPerTask?: int<0, 2147483647>|null,
     *     parameters?: array<string, Shapes\JobParameter>|null,
     *     priority: int<0, 100>,
     *     queueId: string,
     *     storageProfileId?: string|null,
     *     targetTaskRunStatus?: 'READY'|'SUSPENDED'|null,
     *     template: string,
     *     templateType: 'JSON'|'YAML'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
