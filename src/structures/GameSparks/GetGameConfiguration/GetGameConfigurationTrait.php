<?php

namespace Sunaoka\Aws\Structures\GameSparks\GetGameConfiguration;

trait GetGameConfigurationTrait
{
    /**
     * @param GetGameConfigurationRequest $args
     * @return GetGameConfigurationResponse
     */
    public function getGameConfiguration(GetGameConfigurationRequest $args)
    {
        $result = parent::getGameConfiguration($args->toArray());
        return new GetGameConfigurationResponse($result->toArray());
    }
}
