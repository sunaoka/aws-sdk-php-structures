<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CancelPipelineExecution;

trait CancelPipelineExecutionTrait
{
    /**
     * @param CancelPipelineExecutionRequest $args
     * @return CancelPipelineExecutionResponse
     */
    public function cancelPipelineExecution(CancelPipelineExecutionRequest $args)
    {
        $result = parent::cancelPipelineExecution($args->toArray());
        return new CancelPipelineExecutionResponse($result->toArray());
    }
}
