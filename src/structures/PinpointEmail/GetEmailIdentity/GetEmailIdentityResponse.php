<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetEmailIdentity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'EMAIL_ADDRESS'|'DOMAIN'|'MANAGED_DOMAIN'|null $IdentityType
 * @property bool|null $FeedbackForwardingStatus
 * @property bool|null $VerifiedForSendingStatus
 * @property Shapes\DkimAttributes|null $DkimAttributes
 * @property Shapes\MailFromAttributes|null $MailFromAttributes
 * @property list<Shapes\Tag>|null $Tags
 */
class GetEmailIdentityResponse extends Response
{
}
