<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchAgents;

trait SearchAgentsTrait
{
    /**
     * @param SearchAgentsRequest $args
     * @return SearchAgentsResponse
     */
    public function searchAgents(SearchAgentsRequest $args)
    {
        $result = parent::searchAgents($args->toArray());
        return new SearchAgentsResponse($result->toArray());
    }
}
