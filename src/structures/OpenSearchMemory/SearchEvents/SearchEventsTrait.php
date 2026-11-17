<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\SearchEvents;

trait SearchEventsTrait
{
    /**
     * @param SearchEventsRequest $args
     * @return SearchEventsResponse
     */
    public function searchEvents(SearchEventsRequest $args)
    {
        $result = parent::searchEvents($args->toArray());
        return new SearchEventsResponse($result->toArray());
    }
}
