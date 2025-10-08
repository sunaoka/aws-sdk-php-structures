<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityResults;

trait ListDataQualityResultsTrait
{
    /**
     * @param ListDataQualityResultsRequest $args
     * @return ListDataQualityResultsResponse
     */
    public function listDataQualityResults(ListDataQualityResultsRequest $args)
    {
        $result = parent::listDataQualityResults($args->toArray());
        return new ListDataQualityResultsResponse($result->toArray());
    }
}
