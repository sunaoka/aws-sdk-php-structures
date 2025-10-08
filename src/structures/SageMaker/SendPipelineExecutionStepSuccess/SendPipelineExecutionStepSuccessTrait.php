<?php

namespace Sunaoka\Aws\Structures\SageMaker\SendPipelineExecutionStepSuccess;

trait SendPipelineExecutionStepSuccessTrait
{
    /**
     * @param SendPipelineExecutionStepSuccessRequest $args
     * @return SendPipelineExecutionStepSuccessResponse
     */
    public function sendPipelineExecutionStepSuccess(SendPipelineExecutionStepSuccessRequest $args)
    {
        $result = parent::sendPipelineExecutionStepSuccess($args->toArray());
        return new SendPipelineExecutionStepSuccessResponse($result->toArray());
    }
}
