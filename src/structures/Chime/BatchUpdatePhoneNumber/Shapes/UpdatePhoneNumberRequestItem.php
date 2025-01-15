<?php

namespace Sunaoka\Aws\Structures\Chime\BatchUpdatePhoneNumber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PhoneNumberId
 * @property 'BusinessCalling'|'VoiceConnector'|'SipMediaApplicationDialIn'|null $ProductType
 * @property string|null $CallingName
 */
class UpdatePhoneNumberRequestItem extends Shape
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
