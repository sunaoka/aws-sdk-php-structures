<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StopLogging;

trait StopLoggingTrait
{
    /**
     * @param StopLoggingRequest $args
     * @return StopLoggingResponse
     */
    public function stopLogging(StopLoggingRequest $args)
    {
        $result = parent::stopLogging($args->toArray());
        return new StopLoggingResponse($result->toArray());
    }
}
