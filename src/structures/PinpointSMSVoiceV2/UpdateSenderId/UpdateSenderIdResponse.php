<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdateSenderId;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SenderIdArn
 * @property string $SenderId
 * @property string $IsoCountryCode
 * @property list<'TRANSACTIONAL'|'PROMOTIONAL'> $MessageTypes
 * @property string $MonthlyLeasingPrice
 * @property bool $DeletionProtectionEnabled
 * @property bool $Registered
 * @property string|null $RegistrationId
 */
class UpdateSenderIdResponse extends Response
{
}
