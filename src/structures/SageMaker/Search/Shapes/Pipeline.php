<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PipelineArn
 * @property string $PipelineName
 * @property string $PipelineDisplayName
 * @property string $PipelineDescription
 * @property string $RoleArn
 * @property 'Active'|'Deleting' $PipelineStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property \Aws\Api\DateTimeResult $LastRunTime
 * @property UserContext $CreatedBy
 * @property UserContext $LastModifiedBy
 * @property ParallelismConfiguration $ParallelismConfiguration
 * @property list<Tag> $Tags
 */
class Pipeline extends Shape
{
    /**
     * @param array{
     *     PipelineArn?: string,
     *     PipelineName?: string,
     *     PipelineDisplayName?: string,
     *     PipelineDescription?: string,
     *     RoleArn?: string,
     *     PipelineStatus?: 'Active'|'Deleting',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastRunTime?: \Aws\Api\DateTimeResult,
     *     CreatedBy?: UserContext,
     *     LastModifiedBy?: UserContext,
     *     ParallelismConfiguration?: ParallelismConfiguration,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
