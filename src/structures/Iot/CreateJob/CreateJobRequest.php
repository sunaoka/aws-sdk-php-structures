<?php

namespace Sunaoka\Aws\Structures\Iot\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property list<string> $targets
 * @property string|null $documentSource
 * @property string|null $document
 * @property string|null $description
 * @property Shapes\PresignedUrlConfig|null $presignedUrlConfig
 * @property 'CONTINUOUS'|'SNAPSHOT'|null $targetSelection
 * @property Shapes\JobExecutionsRolloutConfig|null $jobExecutionsRolloutConfig
 * @property Shapes\AbortConfig|null $abortConfig
 * @property Shapes\TimeoutConfig|null $timeoutConfig
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $namespaceId
 * @property string|null $jobTemplateArn
 * @property Shapes\JobExecutionsRetryConfig|null $jobExecutionsRetryConfig
 * @property array<string, string>|null $documentParameters
 * @property Shapes\SchedulingConfig|null $schedulingConfig
 * @property list<string>|null $destinationPackageVersions
 */
class CreateJobRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     targets: list<string>,
     *     documentSource?: string|null,
     *     document?: string|null,
     *     description?: string|null,
     *     presignedUrlConfig?: Shapes\PresignedUrlConfig|null,
     *     targetSelection?: 'CONTINUOUS'|'SNAPSHOT'|null,
     *     jobExecutionsRolloutConfig?: Shapes\JobExecutionsRolloutConfig|null,
     *     abortConfig?: Shapes\AbortConfig|null,
     *     timeoutConfig?: Shapes\TimeoutConfig|null,
     *     tags?: list<Shapes\Tag>|null,
     *     namespaceId?: string|null,
     *     jobTemplateArn?: string|null,
     *     jobExecutionsRetryConfig?: Shapes\JobExecutionsRetryConfig|null,
     *     documentParameters?: array<string, string>|null,
     *     schedulingConfig?: Shapes\SchedulingConfig|null,
     *     destinationPackageVersions?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
