<?php

namespace Sunaoka\Aws\Structures\MediaStore\StopAccessLogging;

trait StopAccessLoggingTrait
{
    /**
     * @param StopAccessLoggingRequest $args
     * @return StopAccessLoggingResponse
     */
    public function stopAccessLogging(StopAccessLoggingRequest $args)
    {
        $result = parent::stopAccessLogging($args->toArray());
        return new StopAccessLoggingResponse($result->toArray());
    }
}
