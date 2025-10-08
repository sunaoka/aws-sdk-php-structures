<?php

namespace Sunaoka\Aws\Structures\imagebuilder\StartImagePipelineExecution;

trait StartImagePipelineExecutionTrait
{
    /**
     * @param StartImagePipelineExecutionRequest $args
     * @return StartImagePipelineExecutionResponse
     */
    public function startImagePipelineExecution(StartImagePipelineExecutionRequest $args)
    {
        $result = parent::startImagePipelineExecution($args->toArray());
        return new StartImagePipelineExecutionResponse($result->toArray());
    }
}
