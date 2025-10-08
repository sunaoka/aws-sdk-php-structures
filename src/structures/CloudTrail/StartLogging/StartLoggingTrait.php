<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StartLogging;

trait StartLoggingTrait
{
    /**
     * @param StartLoggingRequest $args
     * @return StartLoggingResponse
     */
    public function startLogging(StartLoggingRequest $args)
    {
        $result = parent::startLogging($args->toArray());
        return new StartLoggingResponse($result->toArray());
    }
}
