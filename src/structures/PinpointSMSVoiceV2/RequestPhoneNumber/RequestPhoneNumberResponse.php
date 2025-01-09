<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\RequestPhoneNumber;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $PhoneNumberArn
 * @property string $PhoneNumberId
 * @property string $PhoneNumber
 * @property 'PENDING'|'ACTIVE'|'ASSOCIATING'|'DISASSOCIATING'|'DELETED' $Status
 * @property string $IsoCountryCode
 * @property 'TRANSACTIONAL'|'PROMOTIONAL' $MessageType
 * @property list<'SMS'|'VOICE'|'MMS'> $NumberCapabilities
 * @property 'LONG_CODE'|'TOLL_FREE'|'TEN_DLC'|'SIMULATOR' $NumberType
 * @property string $MonthlyLeasingPrice
 * @property bool $TwoWayEnabled
 * @property string $TwoWayChannelArn
 * @property string $TwoWayChannelRole
 * @property bool $SelfManagedOptOutsEnabled
 * @property string $OptOutListName
 * @property bool $DeletionProtectionEnabled
 * @property string $PoolId
 * @property string $RegistrationId
 * @property list<Shapes\Tag> $Tags
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class RequestPhoneNumberResponse extends Response
{
}
