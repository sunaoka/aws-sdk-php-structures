<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\GetMessagingStreamingConfigurations;

trait GetMessagingStreamingConfigurationsTrait
{
    /**
     * @param GetMessagingStreamingConfigurationsRequest $args
     * @return GetMessagingStreamingConfigurationsResponse
     */
    public function getMessagingStreamingConfigurations(GetMessagingStreamingConfigurationsRequest $args)
    {
        $result = parent::getMessagingStreamingConfigurations($args->toArray());
        return new GetMessagingStreamingConfigurationsResponse($result->toArray());
    }
}
