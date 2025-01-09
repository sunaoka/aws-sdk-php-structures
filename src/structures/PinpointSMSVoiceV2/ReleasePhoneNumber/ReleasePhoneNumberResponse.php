<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ReleasePhoneNumber;

use Sunaoka\Aws\Structures\Response;

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
 * @property string $RegistrationId
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class ReleasePhoneNumberResponse extends Response
{
}
