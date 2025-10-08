<?php

namespace Sunaoka\Aws\Structures\Sfn\SendTaskFailure;

trait SendTaskFailureTrait
{
    /**
     * @param SendTaskFailureRequest $args
     * @return SendTaskFailureResponse
     */
    public function sendTaskFailure(SendTaskFailureRequest $args)
    {
        $result = parent::sendTaskFailure($args->toArray());
        return new SendTaskFailureResponse($result->toArray());
    }
}
