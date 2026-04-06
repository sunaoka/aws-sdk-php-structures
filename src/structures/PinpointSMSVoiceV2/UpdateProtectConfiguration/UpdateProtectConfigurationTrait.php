<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdateProtectConfiguration;

trait UpdateProtectConfigurationTrait
{
    /**
     * @param UpdateProtectConfigurationRequest $args
     * @return UpdateProtectConfigurationResponse
     */
    public function updateProtectConfiguration(UpdateProtectConfigurationRequest $args)
    {
        $result = parent::updateProtectConfiguration($args->toArray());
        return new UpdateProtectConfigurationResponse($result->toArray());
    }
}
