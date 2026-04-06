<?php

namespace Sunaoka\Aws\Structures\SesV2\GetEmailIdentity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'EMAIL_ADDRESS'|'DOMAIN'|'MANAGED_DOMAIN'|null $IdentityType
 * @property bool|null $FeedbackForwardingStatus
 * @property bool|null $VerifiedForSendingStatus
 * @property Shapes\DkimAttributes|null $DkimAttributes
 * @property Shapes\MailFromAttributes|null $MailFromAttributes
 * @property array<string, string>|null $Policies
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ConfigurationSetName
 * @property 'PENDING'|'SUCCESS'|'FAILED'|'TEMPORARY_FAILURE'|'NOT_STARTED'|null $VerificationStatus
 * @property Shapes\VerificationInfo|null $VerificationInfo
 */
class GetEmailIdentityResponse extends Response
{
}
