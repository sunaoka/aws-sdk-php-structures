<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetPhoneNumberOrder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PhoneNumberOrderId
 * @property 'VoiceConnector'|'SipMediaApplicationDialIn' $ProductType
 * @property 'Processing'|'Successful'|'Failed'|'Partial'|'PendingDocuments'|'Submitted'|'FOC'|'ChangeRequested'|'Exception'|'CancelRequested'|'Cancelled' $Status
 * @property 'New'|'Porting' $OrderType
 * @property list<OrderedPhoneNumber> $OrderedPhoneNumbers
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 */
class PhoneNumberOrder extends Shape
{
    /**
     * @param array{
     *     PhoneNumberOrderId?: string,
     *     ProductType?: 'VoiceConnector'|'SipMediaApplicationDialIn',
     *     Status?: 'Processing'|'Successful'|'Failed'|'Partial'|'PendingDocuments'|'Submitted'|'FOC'|'ChangeRequested'|'Exception'|'CancelRequested'|'Cancelled',
     *     OrderType?: 'New'|'Porting',
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
