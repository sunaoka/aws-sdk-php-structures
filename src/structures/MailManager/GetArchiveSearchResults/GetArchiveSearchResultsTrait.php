<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveSearchResults;

trait GetArchiveSearchResultsTrait
{
    /**
     * @param GetArchiveSearchResultsRequest $args
     * @return GetArchiveSearchResultsResponse
     */
    public function getArchiveSearchResults(GetArchiveSearchResultsRequest $args)
    {
        $result = parent::getArchiveSearchResults($args->toArray());
        return new GetArchiveSearchResultsResponse($result->toArray());
    }
}
