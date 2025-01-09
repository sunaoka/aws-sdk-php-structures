<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetPhoneNumber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property 'VoiceConnectorId'|'VoiceConnectorGroupId'|'SipRuleId' $Name
 * @property \Aws\Api\DateTimeResult $AssociatedTimestamp
 */
class PhoneNumberAssociation extends Shape
{
    /**
     * @param array{
     *     Value?: string,
     *     Name?: 'VoiceConnectorId'|'VoiceConnectorGroupId'|'SipRuleId',
     *     AssociatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
