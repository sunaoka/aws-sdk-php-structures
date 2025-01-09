<?php

namespace Sunaoka\Aws\Structures\Iot\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property list<string> $targets
 * @property string $documentSource
 * @property string $document
 * @property string $description
 * @property Shapes\PresignedUrlConfig $presignedUrlConfig
 * @property 'CONTINUOUS'|'SNAPSHOT' $targetSelection
 * @property Shapes\JobExecutionsRolloutConfig $jobExecutionsRolloutConfig
 * @property Shapes\AbortConfig $abortConfig
 * @property Shapes\TimeoutConfig $timeoutConfig
 * @property list<Shapes\Tag> $tags
 * @property string $namespaceId
 * @property string $jobTemplateArn
 * @property Shapes\JobExecutionsRetryConfig $jobExecutionsRetryConfig
 * @property array<string, string> $documentParameters
 * @property Shapes\SchedulingConfig $schedulingConfig
 * @property list<string> $destinationPackageVersions
 */
class CreateJobRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     targets: list<string>,
     *     documentSource?: string,
     *     document?: string,
     *     description?: string,
     *     presignedUrlConfig?: Shapes\PresignedUrlConfig,
     *     targetSelection?: 'CONTINUOUS'|'SNAPSHOT',
     *     jobExecutionsRolloutConfig?: Shapes\JobExecutionsRolloutConfig,
     *     abortConfig?: Shapes\AbortConfig,
     *     timeoutConfig?: Shapes\TimeoutConfig,
     *     tags?: list<Shapes\Tag>,
     *     namespaceId?: string,
     *     jobTemplateArn?: string,
     *     jobExecutionsRetryConfig?: Shapes\JobExecutionsRetryConfig,
     *     documentParameters?: array<string, string>,
     *     schedulingConfig?: Shapes\SchedulingConfig,
     *     destinationPackageVersions?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
