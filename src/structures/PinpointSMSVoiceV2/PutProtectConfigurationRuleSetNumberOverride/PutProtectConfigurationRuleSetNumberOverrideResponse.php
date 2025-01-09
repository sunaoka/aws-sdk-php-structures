<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\PutProtectConfigurationRuleSetNumberOverride;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ProtectConfigurationArn
 * @property string $ProtectConfigurationId
 * @property string $DestinationPhoneNumber
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property 'ALLOW'|'BLOCK' $Action
 * @property string $IsoCountryCode
 * @property \Aws\Api\DateTimeResult $ExpirationTimestamp
 */
class PutProtectConfigurationRuleSetNumberOverrideResponse extends Response
{
}
