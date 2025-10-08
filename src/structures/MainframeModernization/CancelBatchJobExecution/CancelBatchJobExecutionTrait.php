<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CancelBatchJobExecution;

trait CancelBatchJobExecutionTrait
{
    /**
     * @param CancelBatchJobExecutionRequest $args
     * @return CancelBatchJobExecutionResponse
     */
    public function cancelBatchJobExecution(CancelBatchJobExecutionRequest $args)
    {
        $result = parent::cancelBatchJobExecution($args->toArray());
        return new CancelBatchJobExecutionResponse($result->toArray());
    }
}
