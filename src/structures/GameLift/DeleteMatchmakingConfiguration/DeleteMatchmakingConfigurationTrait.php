<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteMatchmakingConfiguration;

trait DeleteMatchmakingConfigurationTrait
{
    /**
     * @param DeleteMatchmakingConfigurationRequest $args
     * @return DeleteMatchmakingConfigurationResponse
     */
    public function deleteMatchmakingConfiguration(DeleteMatchmakingConfigurationRequest $args)
    {
        $result = parent::deleteMatchmakingConfiguration($args->toArray());
        return new DeleteMatchmakingConfigurationResponse($result->toArray());
    }
}
