<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetPlaybackConfiguration;

trait GetPlaybackConfigurationTrait
{
    /**
     * @param GetPlaybackConfigurationRequest $args
     * @return GetPlaybackConfigurationResponse
     */
    public function getPlaybackConfiguration(GetPlaybackConfigurationRequest $args)
    {
        $result = parent::getPlaybackConfiguration($args->toArray());
        return new GetPlaybackConfigurationResponse($result->toArray());
    }
}
