<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeModelPackagingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobName
 * @property string|null $ProjectName
 * @property string|null $ModelVersion
 * @property ModelPackagingConfiguration|null $ModelPackagingConfiguration
 * @property string|null $ModelPackagingJobDescription
 * @property string|null $ModelPackagingMethod
 * @property ModelPackagingOutputDetails|null $ModelPackagingOutputDetails
 * @property 'CREATED'|'RUNNING'|'SUCCEEDED'|'FAILED'|null $Status
 * @property string|null $StatusMessage
 * @property \Aws\Api\DateTimeResult|null $CreationTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 */
class ModelPackagingDescription extends Shape
{
    /**
     * @param array{
     *     JobName?: string|null,
     *     ProjectName?: string|null,
     *     ModelVersion?: string|null,
     *     ModelPackagingConfiguration?: ModelPackagingConfiguration|null,
     *     ModelPackagingJobDescription?: string|null,
     *     ModelPackagingMethod?: string|null,
     *     ModelPackagingOutputDetails?: ModelPackagingOutputDetails|null,
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
