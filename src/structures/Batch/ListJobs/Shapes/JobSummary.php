<?php

namespace Sunaoka\Aws\Structures\Batch\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobArn
 * @property string $jobId
 * @property string $jobName
 * @property int|null $createdAt
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
     *     createdAt?: int|null,
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
