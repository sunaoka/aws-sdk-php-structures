<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\BatchUpdatePhoneNumber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PhoneNumberId
 * @property 'VoiceConnector'|'SipMediaApplicationDialIn' $ProductType
 * @property string $CallingName
 * @property string $Name
 */
class UpdatePhoneNumberRequestItem extends Shape
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
