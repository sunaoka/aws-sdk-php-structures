<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdatePhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumberId
 * @property 'VoiceConnector'|'SipMediaApplicationDialIn'|null $ProductType
 * @property string|null $CallingName
 * @property string|null $Name
 */
class UpdatePhoneNumberRequest extends Request
{
    /**
     * @param array{
     *     PhoneNumberId: string,
     *     ProductType?: 'VoiceConnector'|'SipMediaApplicationDialIn'|null,
     *     CallingName?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
