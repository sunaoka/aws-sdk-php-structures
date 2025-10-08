<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineParametersForExecution;

trait ListPipelineParametersForExecutionTrait
{
    /**
     * @param ListPipelineParametersForExecutionRequest $args
     * @return ListPipelineParametersForExecutionResponse
     */
    public function listPipelineParametersForExecution(ListPipelineParametersForExecutionRequest $args)
    {
        $result = parent::listPipelineParametersForExecution($args->toArray());
        return new ListPipelineParametersForExecutionResponse($result->toArray());
    }
}
