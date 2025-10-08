<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessions;

trait ListSessionsTrait
{
    /**
     * @param ListSessionsRequest $args
     * @return ListSessionsResponse
     */
    public function listSessions(ListSessionsRequest $args)
    {
        $result = parent::listSessions($args->toArray());
        return new ListSessionsResponse($result->toArray());
    }
}
