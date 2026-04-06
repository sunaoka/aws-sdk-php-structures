<?php

namespace Sunaoka\Aws\Structures\Lambda\SendDurableExecutionCallbackSuccess;

trait SendDurableExecutionCallbackSuccessTrait
{
    /**
     * @param SendDurableExecutionCallbackSuccessRequest $args
     * @return SendDurableExecutionCallbackSuccessResponse
     */
    public function sendDurableExecutionCallbackSuccess(SendDurableExecutionCallbackSuccessRequest $args)
    {
        $result = parent::sendDurableExecutionCallbackSuccess($args->toArray());
        return new SendDurableExecutionCallbackSuccessResponse($result->toArray());
    }
}
