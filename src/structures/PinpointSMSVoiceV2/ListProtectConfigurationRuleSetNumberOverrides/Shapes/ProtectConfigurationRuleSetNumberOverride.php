<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ListProtectConfigurationRuleSetNumberOverrides\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationPhoneNumber
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property 'ALLOW'|'BLOCK' $Action
 * @property string $IsoCountryCode
 * @property \Aws\Api\DateTimeResult $ExpirationTimestamp
 */
class ProtectConfigurationRuleSetNumberOverride extends Shape
{
    /**
     * @param array{
     *     DestinationPhoneNumber: string,
     *     CreatedTimestamp: \Aws\Api\DateTimeResult,
     *     Action: 'ALLOW'|'BLOCK',
     *     IsoCountryCode?: string,
     *     ExpirationTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
