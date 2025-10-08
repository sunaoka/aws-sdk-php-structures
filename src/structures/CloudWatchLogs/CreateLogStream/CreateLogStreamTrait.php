<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateLogStream;

trait CreateLogStreamTrait
{
    /**
     * @param CreateLogStreamRequest $args
     * @return void
     */
    public function createLogStream(CreateLogStreamRequest $args)
    {
        parent::createLogStream($args->toArray());
    }
}
