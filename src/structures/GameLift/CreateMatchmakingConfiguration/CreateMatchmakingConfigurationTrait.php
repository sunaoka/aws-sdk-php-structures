<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateMatchmakingConfiguration;

trait CreateMatchmakingConfigurationTrait
{
    /**
     * @param CreateMatchmakingConfigurationRequest $args
     * @return CreateMatchmakingConfigurationResponse
     */
    public function createMatchmakingConfiguration(CreateMatchmakingConfigurationRequest $args)
    {
        $result = parent::createMatchmakingConfiguration($args->toArray());
        return new CreateMatchmakingConfigurationResponse($result->toArray());
    }
}
