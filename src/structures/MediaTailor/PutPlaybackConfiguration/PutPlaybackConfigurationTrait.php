<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutPlaybackConfiguration;

trait PutPlaybackConfigurationTrait
{
    /**
     * @param PutPlaybackConfigurationRequest $args
     * @return PutPlaybackConfigurationResponse
     */
    public function putPlaybackConfiguration(PutPlaybackConfigurationRequest $args)
    {
        $result = parent::putPlaybackConfiguration($args->toArray());
        return new PutPlaybackConfigurationResponse($result->toArray());
    }
}
