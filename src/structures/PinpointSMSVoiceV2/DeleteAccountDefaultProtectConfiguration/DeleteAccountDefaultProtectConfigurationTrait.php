<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteAccountDefaultProtectConfiguration;

trait DeleteAccountDefaultProtectConfigurationTrait
{
    /**
     * @param DeleteAccountDefaultProtectConfigurationRequest $args
     * @return DeleteAccountDefaultProtectConfigurationResponse
     */
    public function deleteAccountDefaultProtectConfiguration(DeleteAccountDefaultProtectConfigurationRequest $args)
    {
        $result = parent::deleteAccountDefaultProtectConfiguration($args->toArray());
        return new DeleteAccountDefaultProtectConfigurationResponse($result->toArray());
    }
}
