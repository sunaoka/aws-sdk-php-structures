<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchQuickResponses;

trait SearchQuickResponsesTrait
{
    /**
     * @param SearchQuickResponsesRequest $args
     * @return SearchQuickResponsesResponse
     */
    public function searchQuickResponses(SearchQuickResponsesRequest $args)
    {
        $result = parent::searchQuickResponses($args->toArray());
        return new SearchQuickResponsesResponse($result->toArray());
    }
}
