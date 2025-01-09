<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeModelPackagingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobName
 * @property string $ProjectName
 * @property string $ModelVersion
 * @property ModelPackagingConfiguration $ModelPackagingConfiguration
 * @property string $ModelPackagingJobDescription
 * @property string $ModelPackagingMethod
 * @property ModelPackagingOutputDetails $ModelPackagingOutputDetails
 * @property 'CREATED'|'RUNNING'|'SUCCEEDED'|'FAILED' $Status
 * @property string $StatusMessage
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 */
class ModelPackagingDescription extends Shape
{
    /**
     * @param array{
     *     JobName?: string,
     *     ProjectName?: string,
     *     ModelVersion?: string,
     *     ModelPackagingConfiguration?: ModelPackagingConfiguration,
     *     ModelPackagingJobDescription?: string,
     *     ModelPackagingMethod?: string,
     *     ModelPackagingOutputDetails?: ModelPackagingOutputDetails,
     *     Status?: 'CREATED'|'RUNNING'|'SUCCEEDED'|'FAILED',
     *     StatusMessage?: string,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
