<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdatePipelineExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineExecutionArn
 * @property string $PipelineExecutionDescription
 * @property string $PipelineExecutionDisplayName
 * @property Shapes\ParallelismConfiguration $ParallelismConfiguration
 */
class UpdatePipelineExecutionRequest extends Request
{
    /**
     * @param array{
     *     PipelineExecutionArn: string,
     *     PipelineExecutionDescription?: string,
     *     PipelineExecutionDisplayName?: string,
     *     ParallelismConfiguration?: Shapes\ParallelismConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
