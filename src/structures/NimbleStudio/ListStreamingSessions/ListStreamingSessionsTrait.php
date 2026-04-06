<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListStreamingSessions;

trait ListStreamingSessionsTrait
{
    /**
     * @param ListStreamingSessionsRequest $args
     * @return ListStreamingSessionsResponse
     */
    public function listStreamingSessions(ListStreamingSessionsRequest $args)
    {
        $result = parent::listStreamingSessions($args->toArray());
        return new ListStreamingSessionsResponse($result->toArray());
    }
}
