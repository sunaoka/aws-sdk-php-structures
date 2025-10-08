<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribePipelineDefinitionForExecution;

trait DescribePipelineDefinitionForExecutionTrait
{
    /**
     * @param DescribePipelineDefinitionForExecutionRequest $args
     * @return DescribePipelineDefinitionForExecutionResponse
     */
    public function describePipelineDefinitionForExecution(DescribePipelineDefinitionForExecutionRequest $args)
    {
        $result = parent::describePipelineDefinitionForExecution($args->toArray());
        return new DescribePipelineDefinitionForExecutionResponse($result->toArray());
    }
}
