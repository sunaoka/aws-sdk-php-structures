<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\BatchUpdatePhoneNumber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PhoneNumberId
 * @property 'VoiceConnector'|'SipMediaApplicationDialIn'|null $ProductType
 * @property string|null $CallingName
 * @property string|null $Name
 */
class UpdatePhoneNumberRequestItem extends Shape
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
