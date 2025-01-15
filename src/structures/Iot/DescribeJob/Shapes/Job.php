<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobArn
 * @property string|null $jobId
 * @property 'CONTINUOUS'|'SNAPSHOT'|null $targetSelection
 * @property 'IN_PROGRESS'|'CANCELED'|'COMPLETED'|'DELETION_IN_PROGRESS'|'SCHEDULED'|null $status
 * @property bool|null $forceCanceled
 * @property string|null $reasonCode
 * @property string|null $comment
 * @property list<string>|null $targets
 * @property string|null $description
 * @property PresignedUrlConfig|null $presignedUrlConfig
 * @property JobExecutionsRolloutConfig|null $jobExecutionsRolloutConfig
 * @property AbortConfig|null $abortConfig
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 * @property JobProcessDetails|null $jobProcessDetails
 * @property TimeoutConfig|null $timeoutConfig
 * @property string|null $namespaceId
 * @property string|null $jobTemplateArn
 * @property JobExecutionsRetryConfig|null $jobExecutionsRetryConfig
 * @property array<string, string>|null $documentParameters
 * @property bool|null $isConcurrent
 * @property SchedulingConfig|null $schedulingConfig
 * @property list<ScheduledJobRollout>|null $scheduledJobRollouts
 * @property list<string>|null $destinationPackageVersions
 */
class Job extends Shape
{
    /**
     * @param array{
     *     jobArn?: string|null,
     *     jobId?: string|null,
     *     targetSelection?: 'CONTINUOUS'|'SNAPSHOT'|null,
     *     status?: 'IN_PROGRESS'|'CANCELED'|'COMPLETED'|'DELETION_IN_PROGRESS'|'SCHEDULED'|null,
     *     forceCanceled?: bool|null,
     *     reasonCode?: string|null,
     *     comment?: string|null,
     *     targets?: list<string>|null,
     *     description?: string|null,
     *     presignedUrlConfig?: PresignedUrlConfig|null,
     *     jobExecutionsRolloutConfig?: JobExecutionsRolloutConfig|null,
     *     abortConfig?: AbortConfig|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     completedAt?: \Aws\Api\DateTimeResult|null,
     *     jobProcessDetails?: JobProcessDetails|null,
     *     timeoutConfig?: TimeoutConfig|null,
     *     namespaceId?: string|null,
     *     jobTemplateArn?: string|null,
     *     jobExecutionsRetryConfig?: JobExecutionsRetryConfig|null,
     *     documentParameters?: array<string, string>|null,
     *     isConcurrent?: bool|null,
     *     schedulingConfig?: SchedulingConfig|null,
     *     scheduledJobRollouts?: list<ScheduledJobRollout>|null,
     *     destinationPackageVersions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
