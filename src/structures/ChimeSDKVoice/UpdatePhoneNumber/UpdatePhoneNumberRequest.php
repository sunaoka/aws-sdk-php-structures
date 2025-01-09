<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdatePhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumberId
 * @property 'VoiceConnector'|'SipMediaApplicationDialIn' $ProductType
 * @property string $CallingName
 * @property string $Name
 */
class UpdatePhoneNumberRequest extends Request
{
    /**
     * @param array{
     *     PhoneNumberId: string,
     *     ProductType?: 'VoiceConnector'|'SipMediaApplicationDialIn',
     *     CallingName?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
