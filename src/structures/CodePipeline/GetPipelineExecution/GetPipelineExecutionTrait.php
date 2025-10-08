<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineExecution;

trait GetPipelineExecutionTrait
{
    /**
     * @param GetPipelineExecutionRequest $args
     * @return GetPipelineExecutionResponse
     */
    public function getPipelineExecution(GetPipelineExecutionRequest $args)
    {
        $result = parent::getPipelineExecution($args->toArray());
        return new GetPipelineExecutionResponse($result->toArray());
    }
}
