<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\CreateEmailIdentity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'EMAIL_ADDRESS'|'DOMAIN'|'MANAGED_DOMAIN'|null $IdentityType
 * @property bool|null $VerifiedForSendingStatus
 * @property Shapes\DkimAttributes|null $DkimAttributes
 */
class CreateEmailIdentityResponse extends Response
{
}
