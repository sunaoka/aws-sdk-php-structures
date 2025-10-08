<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\ListStreamSessions;

trait ListStreamSessionsTrait
{
    /**
     * @param ListStreamSessionsRequest $args
     * @return ListStreamSessionsResponse
     */
    public function listStreamSessions(ListStreamSessionsRequest $args)
    {
        $result = parent::listStreamSessions($args->toArray());
        return new ListStreamSessionsResponse($result->toArray());
    }
}
