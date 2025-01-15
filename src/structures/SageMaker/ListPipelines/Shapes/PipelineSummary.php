<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PipelineArn
 * @property string|null $PipelineName
 * @property string|null $PipelineDisplayName
 * @property string|null $PipelineDescription
 * @property string|null $RoleArn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $LastExecutionTime
 */
class PipelineSummary extends Shape
{
    /**
     * @param array{
     *     PipelineArn?: string|null,
     *     PipelineName?: string|null,
     *     PipelineDisplayName?: string|null,
     *     PipelineDescription?: string|null,
     *     RoleArn?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastExecutionTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
