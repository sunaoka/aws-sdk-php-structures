<?php

namespace Sunaoka\Aws\Structures\MediaStore\StartAccessLogging;

trait StartAccessLoggingTrait
{
    /**
     * @param StartAccessLoggingRequest $args
     * @return StartAccessLoggingResponse
     */
    public function startAccessLogging(StartAccessLoggingRequest $args)
    {
        $result = parent::startAccessLogging($args->toArray());
        return new StartAccessLoggingResponse($result->toArray());
    }
}
