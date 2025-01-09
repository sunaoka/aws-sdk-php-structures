<?php

namespace Sunaoka\Aws\Structures\Batch\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobArn
 * @property string $jobId
 * @property string $jobName
 * @property int $createdAt
 * @property 'SUBMITTED'|'PENDING'|'RUNNABLE'|'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED' $status
 * @property string $statusReason
 * @property int $startedAt
 * @property int $stoppedAt
 * @property ContainerSummary $container
 * @property ArrayPropertiesSummary $arrayProperties
 * @property NodePropertiesSummary $nodeProperties
 * @property string $jobDefinition
 */
class JobSummary extends Shape
{
    /**
     * @param array{
     *     jobArn?: string,
     *     jobId: string,
     *     jobName: string,
     *     createdAt?: int,
     *     status?: 'SUBMITTED'|'PENDING'|'RUNNABLE'|'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED',
     *     statusReason?: string,
     *     startedAt?: int,
     *     stoppedAt?: int,
     *     container?: ContainerSummary,
     *     arrayProperties?: ArrayPropertiesSummary,
     *     nodeProperties?: NodePropertiesSummary,
     *     jobDefinition?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
