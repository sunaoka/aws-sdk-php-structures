<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribePhoneNumbers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PhoneNumberArn
 * @property string $PhoneNumberId
 * @property string $PhoneNumber
 * @property 'PENDING'|'ACTIVE'|'ASSOCIATING'|'DISASSOCIATING'|'DELETED' $Status
 * @property string $IsoCountryCode
 * @property 'TRANSACTIONAL'|'PROMOTIONAL' $MessageType
 * @property list<'SMS'|'VOICE'|'MMS'> $NumberCapabilities
 * @property 'SHORT_CODE'|'LONG_CODE'|'TOLL_FREE'|'TEN_DLC'|'SIMULATOR' $NumberType
 * @property string $MonthlyLeasingPrice
 * @property bool $TwoWayEnabled
 * @property string $TwoWayChannelArn
 * @property string $TwoWayChannelRole
 * @property bool $SelfManagedOptOutsEnabled
 * @property string $OptOutListName
 * @property bool $DeletionProtectionEnabled
 * @property string $PoolId
 * @property string $RegistrationId
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class PhoneNumberInformation extends Shape
{
    /**
     * @param array{
     *     PhoneNumberArn: string,
     *     PhoneNumberId?: string,
     *     PhoneNumber: string,
     *     Status: 'PENDING'|'ACTIVE'|'ASSOCIATING'|'DISASSOCIATING'|'DELETED',
     *     IsoCountryCode: string,
     *     MessageType: 'TRANSACTIONAL'|'PROMOTIONAL',
     *     NumberCapabilities: list<'SMS'|'VOICE'|'MMS'>,
     *     NumberType: 'SHORT_CODE'|'LONG_CODE'|'TOLL_FREE'|'TEN_DLC'|'SIMULATOR',
     *     MonthlyLeasingPrice: string,
     *     TwoWayEnabled: bool,
     *     TwoWayChannelArn?: string,
     *     TwoWayChannelRole?: string,
     *     SelfManagedOptOutsEnabled: bool,
     *     OptOutListName: string,
     *     DeletionProtectionEnabled: bool,
     *     PoolId?: string,
     *     RegistrationId?: string,
     *     CreatedTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
