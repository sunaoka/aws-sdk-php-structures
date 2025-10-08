<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\SearchSessions;

trait SearchSessionsTrait
{
    /**
     * @param SearchSessionsRequest $args
     * @return SearchSessionsResponse
     */
    public function searchSessions(SearchSessionsRequest $args)
    {
        $result = parent::searchSessions($args->toArray());
        return new SearchSessionsResponse($result->toArray());
    }
}
