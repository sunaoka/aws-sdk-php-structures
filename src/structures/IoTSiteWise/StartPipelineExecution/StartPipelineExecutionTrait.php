<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\StartPipelineExecution;

trait StartPipelineExecutionTrait
{
    /**
     * @param StartPipelineExecutionRequest $args
     * @return StartPipelineExecutionResponse
     */
    public function startPipelineExecution(StartPipelineExecutionRequest $args)
    {
        $result = parent::startPipelineExecution($args->toArray());
        return new StartPipelineExecutionResponse($result->toArray());
    }
}
