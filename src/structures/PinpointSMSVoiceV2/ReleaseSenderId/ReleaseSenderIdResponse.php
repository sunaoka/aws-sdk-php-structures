<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ReleaseSenderId;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SenderIdArn
 * @property string $SenderId
 * @property string $IsoCountryCode
 * @property list<'TRANSACTIONAL'|'PROMOTIONAL'> $MessageTypes
 * @property string $MonthlyLeasingPrice
 * @property bool $Registered
 * @property string $RegistrationId
 */
class ReleaseSenderIdResponse extends Response
{
}
