<?php

namespace Sunaoka\Aws\Structures\Chime\UpdatePhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumberId
 * @property 'BusinessCalling'|'VoiceConnector'|'SipMediaApplicationDialIn'|null $ProductType
 * @property string|null $CallingName
 */
class UpdatePhoneNumberRequest extends Request
{
    /**
     * @param array{
     *     PhoneNumberId: string,
     *     ProductType?: 'BusinessCalling'|'VoiceConnector'|'SipMediaApplicationDialIn'|null,
     *     CallingName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
