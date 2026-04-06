<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\AssociateProtectConfiguration;

trait AssociateProtectConfigurationTrait
{
    /**
     * @param AssociateProtectConfigurationRequest $args
     * @return AssociateProtectConfigurationResponse
     */
    public function associateProtectConfiguration(AssociateProtectConfigurationRequest $args)
    {
        $result = parent::associateProtectConfiguration($args->toArray());
        return new AssociateProtectConfigurationResponse($result->toArray());
    }
}
