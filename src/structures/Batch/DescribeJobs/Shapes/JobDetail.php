<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobArn
 * @property string $jobName
 * @property string $jobId
 * @property string $jobQueue
 * @property 'SUBMITTED'|'PENDING'|'RUNNABLE'|'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED' $status
 * @property string $shareIdentifier
 * @property int $schedulingPriority
 * @property list<AttemptDetail> $attempts
 * @property string $statusReason
 * @property int $createdAt
 * @property RetryStrategy $retryStrategy
 * @property int $startedAt
 * @property int $stoppedAt
 * @property list<JobDependency> $dependsOn
 * @property string $jobDefinition
 * @property array<string, string> $parameters
 * @property ContainerDetail $container
 * @property NodeDetails $nodeDetails
 * @property NodeProperties $nodeProperties
 * @property ArrayPropertiesDetail $arrayProperties
 * @property JobTimeout $timeout
 * @property array<string, string> $tags
 * @property bool $propagateTags
 * @property list<'EC2'|'FARGATE'> $platformCapabilities
 * @property EksPropertiesDetail $eksProperties
 * @property list<EksAttemptDetail> $eksAttempts
 * @property EcsPropertiesDetail $ecsProperties
 * @property bool $isCancelled
 * @property bool $isTerminated
 */
class JobDetail extends Shape
{
    /**
     * @param array{
     *     jobArn?: string,
     *     jobName: string,
     *     jobId: string,
     *     jobQueue: string,
     *     status: 'SUBMITTED'|'PENDING'|'RUNNABLE'|'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED',
     *     shareIdentifier?: string,
     *     schedulingPriority?: int,
     *     attempts?: list<AttemptDetail>,
     *     statusReason?: string,
     *     createdAt?: int,
     *     retryStrategy?: RetryStrategy,
     *     startedAt: int,
     *     stoppedAt?: int,
     *     dependsOn?: list<JobDependency>,
     *     jobDefinition: string,
     *     parameters?: array<string, string>,
     *     container?: ContainerDetail,
     *     nodeDetails?: NodeDetails,
     *     nodeProperties?: NodeProperties,
     *     arrayProperties?: ArrayPropertiesDetail,
     *     timeout?: JobTimeout,
     *     tags?: array<string, string>,
     *     propagateTags?: bool,
     *     platformCapabilities?: list<'EC2'|'FARGATE'>,
     *     eksProperties?: EksPropertiesDetail,
     *     eksAttempts?: list<EksAttemptDetail>,
     *     ecsProperties?: EcsPropertiesDetail,
     *     isCancelled?: bool,
     *     isTerminated?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
