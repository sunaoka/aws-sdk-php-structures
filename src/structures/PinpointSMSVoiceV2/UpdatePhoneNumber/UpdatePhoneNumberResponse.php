<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdatePhoneNumber;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $PhoneNumberArn
 * @property string|null $PhoneNumberId
 * @property string|null $PhoneNumber
 * @property 'PENDING'|'ACTIVE'|'ASSOCIATING'|'DISASSOCIATING'|'DELETED'|null $Status
 * @property string|null $IsoCountryCode
 * @property 'TRANSACTIONAL'|'PROMOTIONAL'|null $MessageType
 * @property list<'SMS'|'VOICE'|'MMS'>|null $NumberCapabilities
 * @property 'SHORT_CODE'|'LONG_CODE'|'TOLL_FREE'|'TEN_DLC'|'SIMULATOR'|null $NumberType
 * @property string|null $MonthlyLeasingPrice
 * @property bool|null $TwoWayEnabled
 * @property string|null $TwoWayChannelArn
 * @property string|null $TwoWayChannelRole
 * @property bool|null $SelfManagedOptOutsEnabled
 * @property string|null $OptOutListName
 * @property bool|null $InternationalSendingEnabled
 * @property bool|null $DeletionProtectionEnabled
 * @property string|null $RegistrationId
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 */
class UpdatePhoneNumberResponse extends Response
{
}
