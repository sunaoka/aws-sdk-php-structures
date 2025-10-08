<?php

namespace Sunaoka\Aws\Structures\SageMaker\SendPipelineExecutionStepFailure;

trait SendPipelineExecutionStepFailureTrait
{
    /**
     * @param SendPipelineExecutionStepFailureRequest $args
     * @return SendPipelineExecutionStepFailureResponse
     */
    public function sendPipelineExecutionStepFailure(SendPipelineExecutionStepFailureRequest $args)
    {
        $result = parent::sendPipelineExecutionStepFailure($args->toArray());
        return new SendPipelineExecutionStepFailureResponse($result->toArray());
    }
}
