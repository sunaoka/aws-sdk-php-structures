<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DeleteMessagingStreamingConfigurations;

trait DeleteMessagingStreamingConfigurationsTrait
{
    /**
     * @param DeleteMessagingStreamingConfigurationsRequest $args
     * @return void
     */
    public function deleteMessagingStreamingConfigurations(DeleteMessagingStreamingConfigurationsRequest $args)
    {
        parent::deleteMessagingStreamingConfigurations($args->toArray());
    }
}
