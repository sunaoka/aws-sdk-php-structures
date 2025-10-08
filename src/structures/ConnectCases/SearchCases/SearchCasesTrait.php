<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchCases;

trait SearchCasesTrait
{
    /**
     * @param SearchCasesRequest $args
     * @return SearchCasesResponse
     */
    public function searchCases(SearchCasesRequest $args)
    {
        $result = parent::searchCases($args->toArray());
        return new SearchCasesResponse($result->toArray());
    }
}
