<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\UpdateServerConfig;

trait UpdateServerConfigTrait
{
    /**
     * @param UpdateServerConfigRequest $args
     * @return UpdateServerConfigResponse
     */
    public function updateServerConfig(UpdateServerConfigRequest $args)
    {
        $result = parent::updateServerConfig($args->toArray());
        return new UpdateServerConfigResponse($result->toArray());
    }
}
