<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetEmailIdentity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'EMAIL_ADDRESS'|'DOMAIN'|'MANAGED_DOMAIN' $IdentityType
 * @property bool $FeedbackForwardingStatus
 * @property bool $VerifiedForSendingStatus
 * @property Shapes\DkimAttributes $DkimAttributes
 * @property Shapes\MailFromAttributes $MailFromAttributes
 * @property list<Shapes\Tag> $Tags
 */
class GetEmailIdentityResponse extends Response
{
}
