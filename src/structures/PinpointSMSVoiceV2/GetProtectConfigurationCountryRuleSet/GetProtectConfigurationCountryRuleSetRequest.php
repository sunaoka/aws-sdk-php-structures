<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\GetProtectConfigurationCountryRuleSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProtectConfigurationId
 * @property 'SMS'|'VOICE'|'MMS' $NumberCapability
 */
class GetProtectConfigurationCountryRuleSetRequest extends Request
{
    /**
     * @param array{
     *     ProtectConfigurationId: string,
     *     NumberCapability: 'SMS'|'VOICE'|'MMS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
