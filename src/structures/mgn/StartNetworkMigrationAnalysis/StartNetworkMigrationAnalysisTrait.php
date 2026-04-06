<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationAnalysis;

trait StartNetworkMigrationAnalysisTrait
{
    /**
     * @param StartNetworkMigrationAnalysisRequest $args
     * @return StartNetworkMigrationAnalysisResponse
     */
    public function startNetworkMigrationAnalysis(StartNetworkMigrationAnalysisRequest $args)
    {
        $result = parent::startNetworkMigrationAnalysis($args->toArray());
        return new StartNetworkMigrationAnalysisResponse($result->toArray());
    }
}
