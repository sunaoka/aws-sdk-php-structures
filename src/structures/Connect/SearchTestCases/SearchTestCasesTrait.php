<?php

namespace Sunaoka\Aws\Structures\Connect\SearchTestCases;

trait SearchTestCasesTrait
{
    /**
     * @param SearchTestCasesRequest $args
     * @return SearchTestCasesResponse
     */
    public function searchTestCases(SearchTestCasesRequest $args)
    {
        $result = parent::searchTestCases($args->toArray());
        return new SearchTestCasesResponse($result->toArray());
    }
}
