<?php

namespace Sunaoka\Aws\Structures\Lambda\SendDurableExecutionCallbackFailure;

trait SendDurableExecutionCallbackFailureTrait
{
    /**
     * @param SendDurableExecutionCallbackFailureRequest $args
     * @return SendDurableExecutionCallbackFailureResponse
     */
    public function sendDurableExecutionCallbackFailure(SendDurableExecutionCallbackFailureRequest $args)
    {
        $result = parent::sendDurableExecutionCallbackFailure($args->toArray());
        return new SendDurableExecutionCallbackFailureResponse($result->toArray());
    }
}
