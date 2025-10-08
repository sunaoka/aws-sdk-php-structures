<?php

namespace Sunaoka\Aws\Structures\Connect\SearchAgentStatuses;

trait SearchAgentStatusesTrait
{
    /**
     * @param SearchAgentStatusesRequest $args
     * @return SearchAgentStatusesResponse
     */
    public function searchAgentStatuses(SearchAgentStatusesRequest $args)
    {
        $result = parent::searchAgentStatuses($args->toArray());
        return new SearchAgentStatusesResponse($result->toArray());
    }
}
