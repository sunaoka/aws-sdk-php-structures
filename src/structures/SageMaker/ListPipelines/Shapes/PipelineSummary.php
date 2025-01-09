<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PipelineArn
 * @property string $PipelineName
 * @property string $PipelineDisplayName
 * @property string $PipelineDescription
 * @property string $RoleArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property \Aws\Api\DateTimeResult $LastExecutionTime
 */
class PipelineSummary extends Shape
{
    /**
     * @param array{
     *     PipelineArn?: string,
     *     PipelineName?: string,
     *     PipelineDisplayName?: string,
     *     PipelineDescription?: string,
     *     RoleArn?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastExecutionTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
