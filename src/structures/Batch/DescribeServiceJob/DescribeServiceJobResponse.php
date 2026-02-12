<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeServiceJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ServiceJobAttemptDetail>|null $attempts
 * @property list<Shapes\ServiceJobCapacityUsageDetail>|null $capacityUsage
 * @property int|null $createdAt
 * @property bool|null $isTerminated
 * @property string|null $jobArn
 * @property string $jobId
 * @property string $jobName
 * @property string $jobQueue
 * @property Shapes\LatestServiceJobAttempt|null $latestAttempt
 * @property Shapes\ServiceJobRetryStrategy|null $retryStrategy
 * @property int|null $scheduledAt
 * @property int|null $schedulingPriority
 * @property string|null $serviceRequestPayload
 * @property 'SAGEMAKER_TRAINING' $serviceJobType
 * @property string|null $shareIdentifier
 * @property int $startedAt
 * @property 'SUBMITTED'|'PENDING'|'RUNNABLE'|'SCHEDULED'|'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED' $status
 * @property string|null $statusReason
 * @property int|null $stoppedAt
 * @property array<string, string>|null $tags
 * @property Shapes\ServiceJobTimeout|null $timeoutConfig
 */
class DescribeServiceJobResponse extends Response
{
}
