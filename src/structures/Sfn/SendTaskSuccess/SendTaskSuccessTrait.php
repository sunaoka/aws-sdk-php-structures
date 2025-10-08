<?php

namespace Sunaoka\Aws\Structures\Sfn\SendTaskSuccess;

trait SendTaskSuccessTrait
{
    /**
     * @param SendTaskSuccessRequest $args
     * @return SendTaskSuccessResponse
     */
    public function sendTaskSuccess(SendTaskSuccessRequest $args)
    {
        $result = parent::sendTaskSuccess($args->toArray());
        return new SendTaskSuccessResponse($result->toArray());
    }
}
