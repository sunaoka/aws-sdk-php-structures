<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListEdgePackagingJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EdgePackagingJobArn
 * @property string $EdgePackagingJobName
 * @property 'STARTING'|'INPROGRESS'|'COMPLETED'|'FAILED'|'STOPPING'|'STOPPED' $EdgePackagingJobStatus
 * @property string $CompilationJobName
 * @property string $ModelName
 * @property string $ModelVersion
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class EdgePackagingJobSummary extends Shape
{
    /**
     * @param array{
     *     EdgePackagingJobArn: string,
     *     EdgePackagingJobName: string,
     *     EdgePackagingJobStatus: 'STARTING'|'INPROGRESS'|'COMPLETED'|'FAILED'|'STOPPING'|'STOPPED',
     *     CompilationJobName?: string,
     *     ModelName?: string,
     *     ModelVersion?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
