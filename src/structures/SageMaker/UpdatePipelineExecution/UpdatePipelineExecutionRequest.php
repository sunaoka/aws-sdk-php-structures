<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdatePipelineExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineExecutionArn
 * @property string|null $PipelineExecutionDescription
 * @property string|null $PipelineExecutionDisplayName
 * @property Shapes\ParallelismConfiguration|null $ParallelismConfiguration
 */
class UpdatePipelineExecutionRequest extends Request
{
    /**
     * @param array{
     *     PipelineExecutionArn: string,
     *     PipelineExecutionDescription?: string|null,
     *     PipelineExecutionDisplayName?: string|null,
     *     ParallelismConfiguration?: Shapes\ParallelismConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
