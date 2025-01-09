<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\PutProtectConfigurationRuleSetNumberOverride;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $ProtectConfigurationId
 * @property string $DestinationPhoneNumber
 * @property 'ALLOW'|'BLOCK' $Action
 * @property \Aws\Api\DateTimeResult $ExpirationTimestamp
 */
class PutProtectConfigurationRuleSetNumberOverrideRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     ProtectConfigurationId: string,
     *     DestinationPhoneNumber: string,
     *     Action: 'ALLOW'|'BLOCK',
     *     ExpirationTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
