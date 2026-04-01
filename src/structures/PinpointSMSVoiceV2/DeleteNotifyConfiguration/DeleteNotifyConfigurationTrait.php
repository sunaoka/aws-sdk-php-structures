<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteNotifyConfiguration;

trait DeleteNotifyConfigurationTrait
{
    /**
     * @param DeleteNotifyConfigurationRequest $args
     * @return DeleteNotifyConfigurationResponse
     */
    public function deleteNotifyConfiguration(DeleteNotifyConfigurationRequest $args)
    {
        $result = parent::deleteNotifyConfiguration($args->toArray());
        return new DeleteNotifyConfigurationResponse($result->toArray());
    }
}
