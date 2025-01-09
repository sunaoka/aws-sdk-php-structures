<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreatePhoneNumberOrder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'VoiceConnector'|'SipMediaApplicationDialIn' $ProductType
 * @property list<string> $E164PhoneNumbers
 * @property string $Name
 */
class CreatePhoneNumberOrderRequest extends Request
{
    /**
     * @param array{
     *     ProductType: 'VoiceConnector'|'SipMediaApplicationDialIn',
     *     E164PhoneNumbers: list<string>,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
