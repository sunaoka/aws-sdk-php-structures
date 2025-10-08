<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListEventStreams;

trait ListEventStreamsTrait
{
    /**
     * @param ListEventStreamsRequest $args
     * @return ListEventStreamsResponse
     */
    public function listEventStreams(ListEventStreamsRequest $args)
    {
        $result = parent::listEventStreams($args->toArray());
        return new ListEventStreamsResponse($result->toArray());
    }
}
