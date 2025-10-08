<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SetAccountDefaultProtectConfiguration;

trait SetAccountDefaultProtectConfigurationTrait
{
    /**
     * @param SetAccountDefaultProtectConfigurationRequest $args
     * @return SetAccountDefaultProtectConfigurationResponse
     */
    public function setAccountDefaultProtectConfiguration(SetAccountDefaultProtectConfigurationRequest $args)
    {
        $result = parent::setAccountDefaultProtectConfiguration($args->toArray());
        return new SetAccountDefaultProtectConfigurationResponse($result->toArray());
    }
}
