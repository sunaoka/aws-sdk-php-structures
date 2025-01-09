<?php

namespace Sunaoka\Aws\Structures\Chime\UpdatePhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumberId
 * @property 'BusinessCalling'|'VoiceConnector'|'SipMediaApplicationDialIn' $ProductType
 * @property string $CallingName
 */
class UpdatePhoneNumberRequest extends Request
{
    /**
     * @param array{
     *     PhoneNumberId: string,
     *     ProductType?: 'BusinessCalling'|'VoiceConnector'|'SipMediaApplicationDialIn',
     *     CallingName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
