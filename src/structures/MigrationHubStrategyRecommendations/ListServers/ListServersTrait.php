<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListServers;

trait ListServersTrait
{
    /**
     * @param ListServersRequest $args
     * @return ListServersResponse
     */
    public function listServers(ListServersRequest $args)
    {
        $result = parent::listServers($args->toArray());
        return new ListServersResponse($result->toArray());
    }
}
