<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DeletePlaybackConfiguration;

trait DeletePlaybackConfigurationTrait
{
    /**
     * @param DeletePlaybackConfigurationRequest $args
     * @return DeletePlaybackConfigurationResponse
     */
    public function deletePlaybackConfiguration(DeletePlaybackConfigurationRequest $args)
    {
        $result = parent::deletePlaybackConfiguration($args->toArray());
        return new DeletePlaybackConfigurationResponse($result->toArray());
    }
}
