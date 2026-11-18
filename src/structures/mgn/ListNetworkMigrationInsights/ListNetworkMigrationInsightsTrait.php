<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationInsights;

trait ListNetworkMigrationInsightsTrait
{
    /**
     * @param ListNetworkMigrationInsightsRequest $args
     * @return ListNetworkMigrationInsightsResponse
     */
    public function listNetworkMigrationInsights(ListNetworkMigrationInsightsRequest $args)
    {
        $result = parent::listNetworkMigrationInsights($args->toArray());
        return new ListNetworkMigrationInsightsResponse($result->toArray());
    }
}
