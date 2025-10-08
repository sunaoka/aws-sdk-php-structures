<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchJobResults;

trait ListSearchJobResultsTrait
{
    /**
     * @param ListSearchJobResultsRequest $args
     * @return ListSearchJobResultsResponse
     */
    public function listSearchJobResults(ListSearchJobResultsRequest $args)
    {
        $result = parent::listSearchJobResults($args->toArray());
        return new ListSearchJobResultsResponse($result->toArray());
    }
}
