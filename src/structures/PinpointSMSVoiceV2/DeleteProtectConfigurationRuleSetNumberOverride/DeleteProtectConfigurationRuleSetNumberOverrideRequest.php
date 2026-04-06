<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteProtectConfigurationRuleSetNumberOverride;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProtectConfigurationId
 * @property string $DestinationPhoneNumber
 */
class DeleteProtectConfigurationRuleSetNumberOverrideRequest extends Request
{
    /**
     * @param array{
     *     ProtectConfigurationId: string,
     *     DestinationPhoneNumber: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
