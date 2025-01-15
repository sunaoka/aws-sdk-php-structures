<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property JobAttachmentSettings|null $jobAttachmentSettings
 * @property JobRunAsUser|null $jobRunAsUser
 * @property string $logGroupName
 * @property string|null $queueRoleArn
 * @property array<string, JobParameter>|null $parameters
 * @property string $schemaVersion
 * @property list<PathMappingRule>|null $pathMappingRules
 */
class JobDetailsEntity extends Shape
{
    /**
     * @param array{
     *     jobId: string,
     *     jobAttachmentSettings?: JobAttachmentSettings|null,
     *     jobRunAsUser?: JobRunAsUser|null,
     *     logGroupName: string,
     *     queueRoleArn?: string|null,
     *     parameters?: array<string, JobParameter>|null,
     *     schemaVersion: string,
     *     pathMappingRules?: list<PathMappingRule>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
