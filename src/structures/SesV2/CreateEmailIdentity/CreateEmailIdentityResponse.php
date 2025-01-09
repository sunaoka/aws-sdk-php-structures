<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateEmailIdentity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'EMAIL_ADDRESS'|'DOMAIN'|'MANAGED_DOMAIN' $IdentityType
 * @property bool $VerifiedForSendingStatus
 * @property Shapes\DkimAttributes $DkimAttributes
 */
class CreateEmailIdentityResponse extends Response
{
}
