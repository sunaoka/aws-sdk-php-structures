<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PipelineArn
 * @property string|null $PipelineName
 * @property string|null $PipelineDisplayName
 * @property string|null $PipelineDescription
 * @property string|null $RoleArn
 * @property 'Active'|'Deleting'|null $PipelineStatus
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $LastRunTime
 * @property UserContext|null $CreatedBy
 * @property UserContext|null $LastModifiedBy
 * @property ParallelismConfiguration|null $ParallelismConfiguration
 * @property list<Tag>|null $Tags
 */
class Pipeline extends Shape
{
    /**
     * @param array{
     *     PipelineArn?: string|null,
     *     PipelineName?: string|null,
     *     PipelineDisplayName?: string|null,
     *     PipelineDescription?: string|null,
     *     RoleArn?: string|null,
     *     PipelineStatus?: 'Active'|'Deleting'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastRunTime?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: UserContext|null,
     *     LastModifiedBy?: UserContext|null,
     *     ParallelismConfiguration?: ParallelismConfiguration|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
