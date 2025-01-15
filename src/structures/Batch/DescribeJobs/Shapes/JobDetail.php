<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobArn
 * @property string $jobName
 * @property string $jobId
 * @property string $jobQueue
 * @property 'SUBMITTED'|'PENDING'|'RUNNABLE'|'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED' $status
 * @property string|null $shareIdentifier
 * @property int|null $schedulingPriority
 * @property list<AttemptDetail>|null $attempts
 * @property string|null $statusReason
 * @property int|null $createdAt
 * @property RetryStrategy|null $retryStrategy
 * @property int $startedAt
 * @property int|null $stoppedAt
 * @property list<JobDependency>|null $dependsOn
 * @property string $jobDefinition
 * @property array<string, string>|null $parameters
 * @property ContainerDetail|null $container
 * @property NodeDetails|null $nodeDetails
 * @property NodeProperties|null $nodeProperties
 * @property ArrayPropertiesDetail|null $arrayProperties
 * @property JobTimeout|null $timeout
 * @property array<string, string>|null $tags
 * @property bool|null $propagateTags
 * @property list<'EC2'|'FARGATE'>|null $platformCapabilities
 * @property EksPropertiesDetail|null $eksProperties
 * @property list<EksAttemptDetail>|null $eksAttempts
 * @property EcsPropertiesDetail|null $ecsProperties
 * @property bool|null $isCancelled
 * @property bool|null $isTerminated
 */
class JobDetail extends Shape
{
    /**
     * @param array{
     *     jobArn?: string|null,
     *     jobName: string,
     *     jobId: string,
     *     jobQueue: string,
     *     status: 'SUBMITTED'|'PENDING'|'RUNNABLE'|'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED',
     *     shareIdentifier?: string|null,
     *     schedulingPriority?: int|null,
     *     attempts?: list<AttemptDetail>|null,
     *     statusReason?: string|null,
     *     createdAt?: int|null,
     *     retryStrategy?: RetryStrategy|null,
     *     startedAt: int,
     *     stoppedAt?: int|null,
     *     dependsOn?: list<JobDependency>|null,
     *     jobDefinition: string,
     *     parameters?: array<string, string>|null,
     *     container?: ContainerDetail|null,
     *     nodeDetails?: NodeDetails|null,
     *     nodeProperties?: NodeProperties|null,
     *     arrayProperties?: ArrayPropertiesDetail|null,
     *     timeout?: JobTimeout|null,
     *     tags?: array<string, string>|null,
     *     propagateTags?: bool|null,
     *     platformCapabilities?: list<'EC2'|'FARGATE'>|null,
     *     eksProperties?: EksPropertiesDetail|null,
     *     eksAttempts?: list<EksAttemptDetail>|null,
     *     ecsProperties?: EcsPropertiesDetail|null,
     *     isCancelled?: bool|null,
     *     isTerminated?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
