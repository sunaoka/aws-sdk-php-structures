<?php

namespace Sunaoka\Aws\Structures\GameLift\SearchGameSessions;

trait SearchGameSessionsTrait
{
    /**
     * @param SearchGameSessionsRequest $args
     * @return SearchGameSessionsResponse
     */
    public function searchGameSessions(SearchGameSessionsRequest $args)
    {
        $result = parent::searchGameSessions($args->toArray());
        return new SearchGameSessionsResponse($result->toArray());
    }
}
