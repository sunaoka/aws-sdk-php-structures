<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetBatchJobExecution;

trait GetBatchJobExecutionTrait
{
    /**
     * @param GetBatchJobExecutionRequest $args
     * @return GetBatchJobExecutionResponse
     */
    public function getBatchJobExecution(GetBatchJobExecutionRequest $args)
    {
        $result = parent::getBatchJobExecution($args->toArray());
        return new GetBatchJobExecutionResponse($result->toArray());
    }
}
