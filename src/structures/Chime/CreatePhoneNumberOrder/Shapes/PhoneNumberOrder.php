<?php

namespace Sunaoka\Aws\Structures\Chime\CreatePhoneNumberOrder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PhoneNumberOrderId
 * @property 'BusinessCalling'|'VoiceConnector'|'SipMediaApplicationDialIn'|null $ProductType
 * @property 'Processing'|'Successful'|'Failed'|'Partial'|null $Status
 * @property list<OrderedPhoneNumber>|null $OrderedPhoneNumbers
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 */
class PhoneNumberOrder extends Shape
{
    /**
     * @param array{
     *     PhoneNumberOrderId?: string|null,
     *     ProductType?: 'BusinessCalling'|'VoiceConnector'|'SipMediaApplicationDialIn'|null,
     *     Status?: 'Processing'|'Successful'|'Failed'|'Partial'|null,
     *     OrderedPhoneNumbers?: list<OrderedPhoneNumber>|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
