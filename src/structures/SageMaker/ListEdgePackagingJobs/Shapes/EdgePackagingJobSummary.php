<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListEdgePackagingJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EdgePackagingJobArn
 * @property string $EdgePackagingJobName
 * @property 'STARTING'|'INPROGRESS'|'COMPLETED'|'FAILED'|'STOPPING'|'STOPPED' $EdgePackagingJobStatus
 * @property string|null $CompilationJobName
 * @property string|null $ModelName
 * @property string|null $ModelVersion
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class EdgePackagingJobSummary extends Shape
{
    /**
     * @param array{
     *     EdgePackagingJobArn: string,
     *     EdgePackagingJobName: string,
     *     EdgePackagingJobStatus: 'STARTING'|'INPROGRESS'|'COMPLETED'|'FAILED'|'STOPPING'|'STOPPED',
     *     CompilationJobName?: string|null,
     *     ModelName?: string|null,
     *     ModelVersion?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
