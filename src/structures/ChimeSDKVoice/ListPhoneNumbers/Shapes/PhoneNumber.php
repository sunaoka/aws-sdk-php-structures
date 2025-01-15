<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListPhoneNumbers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PhoneNumberId
 * @property string|null $E164PhoneNumber
 * @property string|null $Country
 * @property 'Local'|'TollFree'|null $Type
 * @property 'VoiceConnector'|'SipMediaApplicationDialIn'|null $ProductType
 * @property 'Cancelled'|'PortinCancelRequested'|'PortinInProgress'|'AcquireInProgress'|'AcquireFailed'|'Unassigned'|'Assigned'|'ReleaseInProgress'|'DeleteInProgress'|'ReleaseFailed'|'DeleteFailed'|null $Status
 * @property PhoneNumberCapabilities|null $Capabilities
 * @property list<PhoneNumberAssociation>|null $Associations
 * @property string|null $CallingName
 * @property 'Unassigned'|'UpdateInProgress'|'UpdateSucceeded'|'UpdateFailed'|null $CallingNameStatus
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $DeletionTimestamp
 * @property string|null $OrderId
 * @property string|null $Name
 */
class PhoneNumber extends Shape
{
    /**
     * @param array{
     *     PhoneNumberId?: string|null,
     *     E164PhoneNumber?: string|null,
     *     Country?: string|null,
     *     Type?: 'Local'|'TollFree'|null,
     *     ProductType?: 'VoiceConnector'|'SipMediaApplicationDialIn'|null,
     *     Status?: 'Cancelled'|'PortinCancelRequested'|'PortinInProgress'|'AcquireInProgress'|'AcquireFailed'|'Unassigned'|'Assigned'|'ReleaseInProgress'|'DeleteInProgress'|'ReleaseFailed'|'DeleteFailed'|null,
     *     Capabilities?: PhoneNumberCapabilities|null,
     *     Associations?: list<PhoneNumberAssociation>|null,
     *     CallingName?: string|null,
     *     CallingNameStatus?: 'Unassigned'|'UpdateInProgress'|'UpdateSucceeded'|'UpdateFailed'|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     DeletionTimestamp?: \Aws\Api\DateTimeResult|null,
     *     OrderId?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
