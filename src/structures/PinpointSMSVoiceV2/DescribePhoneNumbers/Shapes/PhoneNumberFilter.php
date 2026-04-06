<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribePhoneNumbers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'status'|'iso-country-code'|'message-type'|'number-capability'|'number-type'|'two-way-enabled'|'self-managed-opt-outs-enabled'|'opt-out-list-name'|'deletion-protection-enabled'|'two-way-channel-arn' $Name
 * @property list<string> $Values
 */
class PhoneNumberFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'status'|'iso-country-code'|'message-type'|'number-capability'|'number-type'|'two-way-enabled'|'self-managed-opt-outs-enabled'|'opt-out-list-name'|'deletion-protection-enabled'|'two-way-channel-arn',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
