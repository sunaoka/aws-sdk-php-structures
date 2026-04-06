<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribePhoneNumbers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PhoneNumberArn
 * @property string|null $PhoneNumberId
 * @property string $PhoneNumber
 * @property 'PENDING'|'ACTIVE'|'ASSOCIATING'|'DISASSOCIATING'|'DELETED' $Status
 * @property string $IsoCountryCode
 * @property 'TRANSACTIONAL'|'PROMOTIONAL' $MessageType
 * @property list<'SMS'|'VOICE'> $NumberCapabilities
 * @property 'SHORT_CODE'|'LONG_CODE'|'TOLL_FREE'|'TEN_DLC' $NumberType
 * @property string $MonthlyLeasingPrice
 * @property bool $TwoWayEnabled
 * @property string|null $TwoWayChannelArn
 * @property bool $SelfManagedOptOutsEnabled
 * @property string $OptOutListName
 * @property bool $DeletionProtectionEnabled
 * @property string|null $PoolId
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class PhoneNumberInformation extends Shape
{
    /**
     * @param array{
     *     PhoneNumberArn: string,
     *     PhoneNumberId?: string|null,
     *     PhoneNumber: string,
     *     Status: 'PENDING'|'ACTIVE'|'ASSOCIATING'|'DISASSOCIATING'|'DELETED',
     *     IsoCountryCode: string,
     *     MessageType: 'TRANSACTIONAL'|'PROMOTIONAL',
     *     NumberCapabilities: list<'SMS'|'VOICE'>,
     *     NumberType: 'SHORT_CODE'|'LONG_CODE'|'TOLL_FREE'|'TEN_DLC',
     *     MonthlyLeasingPrice: string,
     *     TwoWayEnabled: bool,
     *     TwoWayChannelArn?: string|null,
     *     SelfManagedOptOutsEnabled: bool,
     *     OptOutListName: string,
     *     DeletionProtectionEnabled: bool,
     *     PoolId?: string|null,
     *     CreatedTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
