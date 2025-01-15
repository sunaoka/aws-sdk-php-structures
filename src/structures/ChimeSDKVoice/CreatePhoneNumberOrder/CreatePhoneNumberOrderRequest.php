<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreatePhoneNumberOrder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'VoiceConnector'|'SipMediaApplicationDialIn' $ProductType
 * @property list<string> $E164PhoneNumbers
 * @property string|null $Name
 */
class CreatePhoneNumberOrderRequest extends Request
{
    /**
     * @param array{
     *     ProductType: 'VoiceConnector'|'SipMediaApplicationDialIn',
     *     E164PhoneNumbers: list<string>,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
