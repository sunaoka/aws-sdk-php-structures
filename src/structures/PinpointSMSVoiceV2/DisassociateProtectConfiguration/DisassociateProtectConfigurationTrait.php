<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DisassociateProtectConfiguration;

trait DisassociateProtectConfigurationTrait
{
    /**
     * @param DisassociateProtectConfigurationRequest $args
     * @return DisassociateProtectConfigurationResponse
     */
    public function disassociateProtectConfiguration(DisassociateProtectConfigurationRequest $args)
    {
        $result = parent::disassociateProtectConfiguration($args->toArray());
        return new DisassociateProtectConfigurationResponse($result->toArray());
    }
}
