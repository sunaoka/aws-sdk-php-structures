<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\GetProtectConfigurationCountryRuleSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ProtectConfigurationArn
 * @property string $ProtectConfigurationId
 * @property 'SMS'|'VOICE'|'MMS'|'RCS' $NumberCapability
 * @property array<string, Shapes\ProtectConfigurationCountryRuleSetInformation> $CountryRuleSet
 */
class GetProtectConfigurationCountryRuleSetResponse extends Response
{
}
