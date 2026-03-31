<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateNotifyConfiguration;

trait CreateNotifyConfigurationTrait
{
    /**
     * @param CreateNotifyConfigurationRequest $args
     * @return CreateNotifyConfigurationResponse
     */
    public function createNotifyConfiguration(CreateNotifyConfigurationRequest $args)
    {
        $result = parent::createNotifyConfiguration($args->toArray());
        return new CreateNotifyConfigurationResponse($result->toArray());
    }
}
