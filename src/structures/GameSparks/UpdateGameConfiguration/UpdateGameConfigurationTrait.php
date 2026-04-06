<?php

namespace Sunaoka\Aws\Structures\GameSparks\UpdateGameConfiguration;

trait UpdateGameConfigurationTrait
{
    /**
     * @param UpdateGameConfigurationRequest $args
     * @return UpdateGameConfigurationResponse
     */
    public function updateGameConfiguration(UpdateGameConfigurationRequest $args)
    {
        $result = parent::updateGameConfiguration($args->toArray());
        return new UpdateGameConfigurationResponse($result->toArray());
    }
}
