<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateMatchmakingConfiguration;

trait UpdateMatchmakingConfigurationTrait
{
    /**
     * @param UpdateMatchmakingConfigurationRequest $args
     * @return UpdateMatchmakingConfigurationResponse
     */
    public function updateMatchmakingConfiguration(UpdateMatchmakingConfigurationRequest $args)
    {
        $result = parent::updateMatchmakingConfiguration($args->toArray());
        return new UpdateMatchmakingConfigurationResponse($result->toArray());
    }
}
