<?php

namespace Sunaoka\Aws\Structures\MigrationHub\DeleteProgressUpdateStream;

trait DeleteProgressUpdateStreamTrait
{
    /**
     * @param DeleteProgressUpdateStreamRequest $args
     * @return DeleteProgressUpdateStreamResponse
     */
    public function deleteProgressUpdateStream(DeleteProgressUpdateStreamRequest $args)
    {
        $result = parent::deleteProgressUpdateStream($args->toArray());
        return new DeleteProgressUpdateStreamResponse($result->toArray());
    }
}
