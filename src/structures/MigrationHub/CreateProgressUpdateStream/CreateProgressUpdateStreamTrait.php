<?php

namespace Sunaoka\Aws\Structures\MigrationHub\CreateProgressUpdateStream;

trait CreateProgressUpdateStreamTrait
{
    /**
     * @param CreateProgressUpdateStreamRequest $args
     * @return CreateProgressUpdateStreamResponse
     */
    public function createProgressUpdateStream(CreateProgressUpdateStreamRequest $args)
    {
        $result = parent::createProgressUpdateStream($args->toArray());
        return new CreateProgressUpdateStreamResponse($result->toArray());
    }
}
