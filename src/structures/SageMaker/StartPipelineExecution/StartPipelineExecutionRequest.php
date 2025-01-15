<?php

namespace Sunaoka\Aws\Structures\SageMaker\StartPipelineExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineName
 * @property string|null $PipelineExecutionDisplayName
 * @property list<Shapes\Parameter>|null $PipelineParameters
 * @property string|null $PipelineExecutionDescription
 * @property string $ClientRequestToken
 * @property Shapes\ParallelismConfiguration|null $ParallelismConfiguration
 * @property Shapes\SelectiveExecutionConfig|null $SelectiveExecutionConfig
 */
class StartPipelineExecutionRequest extends Request
{
    /**
     * @param array{
     *     PipelineName: string,
     *     PipelineExecutionDisplayName?: string|null,
     *     PipelineParameters?: list<Shapes\Parameter>|null,
     *     PipelineExecutionDescription?: string|null,
     *     ClientRequestToken: string,
     *     ParallelismConfiguration?: Shapes\ParallelismConfiguration|null,
     *     SelectiveExecutionConfig?: Shapes\SelectiveExecutionConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
