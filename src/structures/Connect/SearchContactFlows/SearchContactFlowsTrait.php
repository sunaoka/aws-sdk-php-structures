<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactFlows;

trait SearchContactFlowsTrait
{
    /**
     * @param SearchContactFlowsRequest $args
     * @return SearchContactFlowsResponse
     */
    public function searchContactFlows(SearchContactFlowsRequest $args)
    {
        $result = parent::searchContactFlows($args->toArray());
        return new SearchContactFlowsResponse($result->toArray());
    }
}
