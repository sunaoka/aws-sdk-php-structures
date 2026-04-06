<?php

namespace Sunaoka\Aws\Structures\Batch\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobArn
 * @property string $jobId
 * @property string $jobName
 * @property list<JobCapacityUsageSummary>|null $capacityUsage
 * @property int|null $createdAt
 * @property int|null $scheduledAt
 * @property string|null $shareIdentifier
 * @property 'SUBMITTED'|'PENDING'|'RUNNABLE'|'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED'|null $status
 * @property string|null $statusReason
 * @property int|null $startedAt
 * @property int|null $stoppedAt
 * @property ContainerSummary|null $container
 * @property ArrayPropertiesSummary|null $arrayProperties
 * @property NodePropertiesSummary|null $nodeProperties
 * @property string|null $jobDefinition
 */
class JobSummary extends Shape
{
    /**
     * @param array{
     *     jobArn?: string|null,
     *     jobId: string,
     *     jobName: string,
     *     capacityUsage?: list<JobCapacityUsageSummary>|null,
     *     createdAt?: int|null,
     *     scheduledAt?: int|null,
     *     shareIdentifier?: string|null,
     *     status?: 'SUBMITTED'|'PENDING'|'RUNNABLE'|'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED'|null,
     *     statusReason?: string|null,
     *     startedAt?: int|null,
     *     stoppedAt?: int|null,
     *     container?: ContainerSummary|null,
     *     arrayProperties?: ArrayPropertiesSummary|null,
     *     nodeProperties?: NodePropertiesSummary|null,
     *     jobDefinition?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
