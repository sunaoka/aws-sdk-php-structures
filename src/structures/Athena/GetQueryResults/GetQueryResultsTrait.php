<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryResults;

trait GetQueryResultsTrait
{
    /**
     * @param GetQueryResultsRequest $args
     * @return GetQueryResultsResponse
     */
    public function getQueryResults(GetQueryResultsRequest $args)
    {
        $result = parent::getQueryResults($args->toArray());
        return new GetQueryResultsResponse($result->toArray());
    }
}
