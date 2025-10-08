<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListProgressUpdateStreams;

trait ListProgressUpdateStreamsTrait
{
    /**
     * @param ListProgressUpdateStreamsRequest $args
     * @return ListProgressUpdateStreamsResponse
     */
    public function listProgressUpdateStreams(ListProgressUpdateStreamsRequest $args)
    {
        $result = parent::listProgressUpdateStreams($args->toArray());
        return new ListProgressUpdateStreamsResponse($result->toArray());
    }
}
