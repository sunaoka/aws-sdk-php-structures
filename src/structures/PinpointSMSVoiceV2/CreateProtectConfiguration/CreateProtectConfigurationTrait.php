<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateProtectConfiguration;

trait CreateProtectConfigurationTrait
{
    /**
     * @param CreateProtectConfigurationRequest $args
     * @return CreateProtectConfigurationResponse
     */
    public function createProtectConfiguration(CreateProtectConfigurationRequest $args)
    {
        $result = parent::createProtectConfiguration($args->toArray());
        return new CreateProtectConfigurationResponse($result->toArray());
    }
}
