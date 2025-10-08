<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetInsightResults;

trait GetInsightResultsTrait
{
    /**
     * @param GetInsightResultsRequest $args
     * @return GetInsightResultsResponse
     */
    public function getInsightResults(GetInsightResultsRequest $args)
    {
        $result = parent::getInsightResults($args->toArray());
        return new GetInsightResultsResponse($result->toArray());
    }
}
