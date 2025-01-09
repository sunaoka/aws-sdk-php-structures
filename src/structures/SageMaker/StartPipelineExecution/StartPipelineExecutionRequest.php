<?php

namespace Sunaoka\Aws\Structures\SageMaker\StartPipelineExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 * @property string $PipelineExecutionDisplayName
 * @property list<Shapes\Parameter> $PipelineParameters
 * @property string $PipelineExecutionDescription
 * @property string $ClientRequestToken
 * @property Shapes\ParallelismConfiguration $ParallelismConfiguration
 * @property Shapes\SelectiveExecutionConfig $SelectiveExecutionConfig
 */
class StartPipelineExecutionRequest extends Request
{
    /**
     * @param array{
     *     PipelineName: string,
     *     PipelineExecutionDisplayName?: string,
     *     PipelineParameters?: list<Shapes\Parameter>,
     *     PipelineExecutionDescription?: string,
     *     ClientRequestToken: string,
     *     ParallelismConfiguration?: Shapes\ParallelismConfiguration,
     *     SelectiveExecutionConfig?: Shapes\SelectiveExecutionConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
