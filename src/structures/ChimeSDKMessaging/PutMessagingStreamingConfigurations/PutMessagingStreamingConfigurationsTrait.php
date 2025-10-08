<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\PutMessagingStreamingConfigurations;

trait PutMessagingStreamingConfigurationsTrait
{
    /**
     * @param PutMessagingStreamingConfigurationsRequest $args
     * @return PutMessagingStreamingConfigurationsResponse
     */
    public function putMessagingStreamingConfigurations(PutMessagingStreamingConfigurationsRequest $args)
    {
        $result = parent::putMessagingStreamingConfigurations($args->toArray());
        return new PutMessagingStreamingConfigurationsResponse($result->toArray());
    }
}
