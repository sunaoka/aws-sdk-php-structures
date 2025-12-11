<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchFlows;

trait SearchFlowsTrait
{
    /**
     * @param SearchFlowsRequest $args
     * @return SearchFlowsResponse
     */
    public function searchFlows(SearchFlowsRequest $args)
    {
        $result = parent::searchFlows($args->toArray());
        return new SearchFlowsResponse($result->toArray());
    }
}
