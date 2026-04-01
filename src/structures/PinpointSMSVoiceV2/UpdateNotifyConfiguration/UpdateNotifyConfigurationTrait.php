<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdateNotifyConfiguration;

trait UpdateNotifyConfigurationTrait
{
    /**
     * @param UpdateNotifyConfigurationRequest $args
     * @return UpdateNotifyConfigurationResponse
     */
    public function updateNotifyConfiguration(UpdateNotifyConfigurationRequest $args)
    {
        $result = parent::updateNotifyConfiguration($args->toArray());
        return new UpdateNotifyConfigurationResponse($result->toArray());
    }
}
