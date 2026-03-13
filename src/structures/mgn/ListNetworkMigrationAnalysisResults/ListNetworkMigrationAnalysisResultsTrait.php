<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationAnalysisResults;

trait ListNetworkMigrationAnalysisResultsTrait
{
    /**
     * @param ListNetworkMigrationAnalysisResultsRequest $args
     * @return ListNetworkMigrationAnalysisResultsResponse
     */
    public function listNetworkMigrationAnalysisResults(ListNetworkMigrationAnalysisResultsRequest $args)
    {
        $result = parent::listNetworkMigrationAnalysisResults($args->toArray());
        return new ListNetworkMigrationAnalysisResultsResponse($result->toArray());
    }
}
