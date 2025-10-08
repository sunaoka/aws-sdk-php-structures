<?php

namespace Sunaoka\Aws\Structures\IVS\ListStreamSessions;

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
