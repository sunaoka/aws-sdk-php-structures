<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreatePhoneNumberOrder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PhoneNumberOrderId
 * @property 'VoiceConnector'|'SipMediaApplicationDialIn'|null $ProductType
 * @property 'Processing'|'Successful'|'Failed'|'Partial'|'PendingDocuments'|'Submitted'|'FOC'|'ChangeRequested'|'Exception'|'CancelRequested'|'Cancelled'|null $Status
 * @property 'New'|'Porting'|null $OrderType
 * @property list<OrderedPhoneNumber>|null $OrderedPhoneNumbers
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $FocDate
 */
class PhoneNumberOrder extends Shape
{
    /**
     * @param array{
     *     PhoneNumberOrderId?: string|null,
     *     ProductType?: 'VoiceConnector'|'SipMediaApplicationDialIn'|null,
     *     Status?: 'Processing'|'Successful'|'Failed'|'Partial'|'PendingDocuments'|'Submitted'|'FOC'|'ChangeRequested'|'Exception'|'CancelRequested'|'Cancelled'|null,
     *     OrderType?: 'New'|'Porting'|null,
     *     OrderedPhoneNumbers?: list<OrderedPhoneNumber>|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     FocDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
