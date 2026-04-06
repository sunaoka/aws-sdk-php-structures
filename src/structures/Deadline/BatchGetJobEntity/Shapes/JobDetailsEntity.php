<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JobAttachmentSettings|null $jobAttachmentSettings
 * @property string $jobId
 * @property JobRunAsUser|null $jobRunAsUser
 * @property string $logGroupName
 * @property array<string, JobParameter>|null $parameters
 * @property list<PathMappingRule>|null $pathMappingRules
 * @property string|null $queueRoleArn
 * @property string $schemaVersion
 */
class JobDetailsEntity extends Shape
{
    /**
     * @param array{
     *     jobAttachmentSettings?: JobAttachmentSettings|null,
     *     jobId: string,
     *     jobRunAsUser?: JobRunAsUser|null,
     *     logGroupName: string,
     *     parameters?: array<string, JobParameter>|null,
     *     pathMappingRules?: list<PathMappingRule>|null,
     *     queueRoleArn?: string|null,
     *     schemaVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
