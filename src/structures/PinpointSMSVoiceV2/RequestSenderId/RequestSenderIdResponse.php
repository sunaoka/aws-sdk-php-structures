<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\RequestSenderId;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SenderIdArn
 * @property string $SenderId
 * @property string $IsoCountryCode
 * @property list<'TRANSACTIONAL'|'PROMOTIONAL'> $MessageTypes
 * @property string $MonthlyLeasingPrice
 * @property bool $DeletionProtectionEnabled
 * @property bool $Registered
 * @property list<Shapes\Tag> $Tags
 */
class RequestSenderIdResponse extends Response
{
}
