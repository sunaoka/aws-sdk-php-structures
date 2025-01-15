<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\ListModelPackagingJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobName
 * @property string|null $ProjectName
 * @property string|null $ModelVersion
 * @property string|null $ModelPackagingJobDescription
 * @property string|null $ModelPackagingMethod
 * @property 'CREATED'|'RUNNING'|'SUCCEEDED'|'FAILED'|null $Status
 * @property string|null $StatusMessage
 * @property \Aws\Api\DateTimeResult|null $CreationTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 */
class ModelPackagingJobMetadata extends Shape
{
    /**
     * @param array{
     *     JobName?: string|null,
     *     ProjectName?: string|null,
     *     ModelVersion?: string|null,
     *     ModelPackagingJobDescription?: string|null,
     *     ModelPackagingMethod?: string|null,
     *     Status?: 'CREATED'|'RUNNING'|'SUCCEEDED'|'FAILED'|null,
     *     StatusMessage?: string|null,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
