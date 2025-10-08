<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchAnalyses;

trait SearchAnalysesTrait
{
    /**
     * @param SearchAnalysesRequest $args
     * @return SearchAnalysesResponse
     */
    public function searchAnalyses(SearchAnalysesRequest $args)
    {
        $result = parent::searchAnalyses($args->toArray());
        return new SearchAnalysesResponse($result->toArray());
    }
}
