<?php

namespace Sunaoka\Aws\Structures\Chime\GetPhoneNumberOrder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PhoneNumberOrderId
 * @property 'BusinessCalling'|'VoiceConnector'|'SipMediaApplicationDialIn' $ProductType
 * @property 'Processing'|'Successful'|'Failed'|'Partial' $Status
 * @property list<OrderedPhoneNumber> $OrderedPhoneNumbers
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 */
class PhoneNumberOrder extends Shape
{
    /**
     * @param array{
     *     PhoneNumberOrderId?: string,
     *     ProductType?: 'BusinessCalling'|'VoiceConnector'|'SipMediaApplicationDialIn',
     *     Status?: 'Processing'|'Successful'|'Failed'|'Partial',
     *     OrderedPhoneNumbers?: list<OrderedPhoneNumber>,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
