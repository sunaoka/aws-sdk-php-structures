<?php

namespace Sunaoka\Aws\Structures\Chime\CreatePhoneNumberOrder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'BusinessCalling'|'VoiceConnector'|'SipMediaApplicationDialIn' $ProductType
 * @property list<string> $E164PhoneNumbers
 */
class CreatePhoneNumberOrderRequest extends Request
{
    /**
     * @param array{
     *     ProductType: 'BusinessCalling'|'VoiceConnector'|'SipMediaApplicationDialIn',
     *     E164PhoneNumbers: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
