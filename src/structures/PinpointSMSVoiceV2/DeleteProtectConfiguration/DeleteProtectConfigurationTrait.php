<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteProtectConfiguration;

trait DeleteProtectConfigurationTrait
{
    /**
     * @param DeleteProtectConfigurationRequest $args
     * @return DeleteProtectConfigurationResponse
     */
    public function deleteProtectConfiguration(DeleteProtectConfigurationRequest $args)
    {
        $result = parent::deleteProtectConfiguration($args->toArray());
        return new DeleteProtectConfigurationResponse($result->toArray());
    }
}
