<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPlaybackConfigurations;

trait ListPlaybackConfigurationsTrait
{
    /**
     * @param ListPlaybackConfigurationsRequest $args
     * @return ListPlaybackConfigurationsResponse
     */
    public function listPlaybackConfigurations(ListPlaybackConfigurationsRequest $args)
    {
        $result = parent::listPlaybackConfigurations($args->toArray());
        return new ListPlaybackConfigurationsResponse($result->toArray());
    }
}
