<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property JobAttachmentSettings $jobAttachmentSettings
 * @property JobRunAsUser $jobRunAsUser
 * @property string $logGroupName
 * @property string $queueRoleArn
 * @property array<string, JobParameter> $parameters
 * @property string $schemaVersion
 * @property list<PathMappingRule> $pathMappingRules
 */
class JobDetailsEntity extends Shape
{
    /**
     * @param array{
     *     jobId: string,
     *     jobAttachmentSettings?: JobAttachmentSettings,
     *     jobRunAsUser?: JobRunAsUser,
     *     logGroupName: string,
     *     queueRoleArn?: string,
     *     parameters?: array<string, JobParameter>,
     *     schemaVersion: string,
     *     pathMappingRules?: list<PathMappingRule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
