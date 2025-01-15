<?php

namespace Sunaoka\Aws\Structures\Chime\RestorePhoneNumber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 * @property 'AccountId'|'UserId'|'VoiceConnectorId'|'VoiceConnectorGroupId'|'SipRuleId'|null $Name
 * @property \Aws\Api\DateTimeResult|null $AssociatedTimestamp
 */
class PhoneNumberAssociation extends Shape
{
    /**
     * @param array{
     *     Value?: string|null,
     *     Name?: 'AccountId'|'UserId'|'VoiceConnectorId'|'VoiceConnectorGroupId'|'SipRuleId'|null,
     *     AssociatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
