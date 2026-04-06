<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListAnalyzableServers;

trait ListAnalyzableServersTrait
{
    /**
     * @param ListAnalyzableServersRequest $args
     * @return ListAnalyzableServersResponse
     */
    public function listAnalyzableServers(ListAnalyzableServersRequest $args)
    {
        $result = parent::listAnalyzableServers($args->toArray());
        return new ListAnalyzableServersResponse($result->toArray());
    }
}
