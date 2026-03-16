<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationAnalyses;

trait ListNetworkMigrationAnalysesTrait
{
    /**
     * @param ListNetworkMigrationAnalysesRequest $args
     * @return ListNetworkMigrationAnalysesResponse
     */
    public function listNetworkMigrationAnalyses(ListNetworkMigrationAnalysesRequest $args)
    {
        $result = parent::listNetworkMigrationAnalyses($args->toArray());
        return new ListNetworkMigrationAnalysesResponse($result->toArray());
    }
}
