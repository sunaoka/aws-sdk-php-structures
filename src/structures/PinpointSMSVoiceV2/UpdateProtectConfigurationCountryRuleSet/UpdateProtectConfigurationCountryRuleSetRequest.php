<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdateProtectConfigurationCountryRuleSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProtectConfigurationId
 * @property 'SMS'|'VOICE'|'MMS' $NumberCapability
 * @property array<string, Shapes\ProtectConfigurationCountryRuleSetInformation> $CountryRuleSetUpdates
 */
class UpdateProtectConfigurationCountryRuleSetRequest extends Request
{
    /**
     * @param array{
     *     ProtectConfigurationId: string,
     *     NumberCapability: 'SMS'|'VOICE'|'MMS',
     *     CountryRuleSetUpdates: array<string, Shapes\ProtectConfigurationCountryRuleSetInformation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
