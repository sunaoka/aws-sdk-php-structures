<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdateProtectConfigurationCountryRuleSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ProtectConfigurationArn
 * @property string $ProtectConfigurationId
 * @property 'SMS'|'VOICE'|'MMS'|'RCS' $NumberCapability
 * @property array<string, Shapes\ProtectConfigurationCountryRuleSetInformation> $CountryRuleSet
 */
class UpdateProtectConfigurationCountryRuleSetResponse extends Response
{
}
