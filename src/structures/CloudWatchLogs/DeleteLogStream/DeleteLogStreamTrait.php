<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteLogStream;

trait DeleteLogStreamTrait
{
    /**
     * @param DeleteLogStreamRequest $args
     * @return void
     */
    public function deleteLogStream(DeleteLogStreamRequest $args)
    {
        parent::deleteLogStream($args->toArray());
    }
}
