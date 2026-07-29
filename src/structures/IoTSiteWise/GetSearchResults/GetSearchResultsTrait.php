<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetSearchResults;

trait GetSearchResultsTrait
{
    /**
     * @param GetSearchResultsRequest $args
     * @return GetSearchResultsResponse
     */
    public function getSearchResults(GetSearchResultsRequest $args)
    {
        $result = parent::getSearchResults($args->toArray());
        return new GetSearchResultsResponse($result->toArray());
    }
}
