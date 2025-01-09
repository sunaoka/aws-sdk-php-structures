<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListPhoneNumbers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PhoneNumberId
 * @property string $E164PhoneNumber
 * @property string $Country
 * @property 'Local'|'TollFree' $Type
 * @property 'VoiceConnector'|'SipMediaApplicationDialIn' $ProductType
 * @property 'Cancelled'|'PortinCancelRequested'|'PortinInProgress'|'AcquireInProgress'|'AcquireFailed'|'Unassigned'|'Assigned'|'ReleaseInProgress'|'DeleteInProgress'|'ReleaseFailed'|'DeleteFailed' $Status
 * @property PhoneNumberCapabilities $Capabilities
 * @property list<PhoneNumberAssociation> $Associations
 * @property string $CallingName
 * @property 'Unassigned'|'UpdateInProgress'|'UpdateSucceeded'|'UpdateFailed' $CallingNameStatus
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 * @property \Aws\Api\DateTimeResult $DeletionTimestamp
 * @property string $OrderId
 * @property string $Name
 */
class PhoneNumber extends Shape
{
    /**
     * @param array{
     *     PhoneNumberId?: string,
     *     E164PhoneNumber?: string,
     *     Country?: string,
     *     Type?: 'Local'|'TollFree',
     *     ProductType?: 'VoiceConnector'|'SipMediaApplicationDialIn',
     *     Status?: 'Cancelled'|'PortinCancelRequested'|'PortinInProgress'|'AcquireInProgress'|'AcquireFailed'|'Unassigned'|'Assigned'|'ReleaseInProgress'|'DeleteInProgress'|'ReleaseFailed'|'DeleteFailed',
     *     Capabilities?: PhoneNumberCapabilities,
     *     Associations?: list<PhoneNumberAssociation>,
     *     CallingName?: string,
     *     CallingNameStatus?: 'Unassigned'|'UpdateInProgress'|'UpdateSucceeded'|'UpdateFailed',
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     DeletionTimestamp?: \Aws\Api\DateTimeResult,
     *     OrderId?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
