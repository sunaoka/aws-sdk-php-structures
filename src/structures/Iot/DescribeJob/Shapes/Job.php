<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobArn
 * @property string $jobId
 * @property 'CONTINUOUS'|'SNAPSHOT' $targetSelection
 * @property 'IN_PROGRESS'|'CANCELED'|'COMPLETED'|'DELETION_IN_PROGRESS'|'SCHEDULED' $status
 * @property bool $forceCanceled
 * @property string $reasonCode
 * @property string $comment
 * @property list<string> $targets
 * @property string $description
 * @property PresignedUrlConfig $presignedUrlConfig
 * @property JobExecutionsRolloutConfig $jobExecutionsRolloutConfig
 * @property AbortConfig $abortConfig
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property \Aws\Api\DateTimeResult $completedAt
 * @property JobProcessDetails $jobProcessDetails
 * @property TimeoutConfig $timeoutConfig
 * @property string $namespaceId
 * @property string $jobTemplateArn
 * @property JobExecutionsRetryConfig $jobExecutionsRetryConfig
 * @property array<string, string> $documentParameters
 * @property bool $isConcurrent
 * @property SchedulingConfig $schedulingConfig
 * @property list<ScheduledJobRollout> $scheduledJobRollouts
 * @property list<string> $destinationPackageVersions
 */
class Job extends Shape
{
    /**
     * @param array{
     *     jobArn?: string,
     *     jobId?: string,
     *     targetSelection?: 'CONTINUOUS'|'SNAPSHOT',
     *     status?: 'IN_PROGRESS'|'CANCELED'|'COMPLETED'|'DELETION_IN_PROGRESS'|'SCHEDULED',
     *     forceCanceled?: bool,
     *     reasonCode?: string,
     *     comment?: string,
     *     targets?: list<string>,
     *     description?: string,
     *     presignedUrlConfig?: PresignedUrlConfig,
     *     jobExecutionsRolloutConfig?: JobExecutionsRolloutConfig,
     *     abortConfig?: AbortConfig,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     completedAt?: \Aws\Api\DateTimeResult,
     *     jobProcessDetails?: JobProcessDetails,
     *     timeoutConfig?: TimeoutConfig,
     *     namespaceId?: string,
     *     jobTemplateArn?: string,
     *     jobExecutionsRetryConfig?: JobExecutionsRetryConfig,
     *     documentParameters?: array<string, string>,
     *     isConcurrent?: bool,
     *     schedulingConfig?: SchedulingConfig,
     *     scheduledJobRollouts?: list<ScheduledJobRollout>,
     *     destinationPackageVersions?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
