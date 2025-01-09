<?php

namespace Sunaoka\Aws\Structures\SesV2\GetEmailIdentity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'EMAIL_ADDRESS'|'DOMAIN'|'MANAGED_DOMAIN' $IdentityType
 * @property bool $FeedbackForwardingStatus
 * @property bool $VerifiedForSendingStatus
 * @property Shapes\DkimAttributes $DkimAttributes
 * @property Shapes\MailFromAttributes $MailFromAttributes
 * @property array<string, string> $Policies
 * @property list<Shapes\Tag> $Tags
 * @property string $ConfigurationSetName
 * @property 'PENDING'|'SUCCESS'|'FAILED'|'TEMPORARY_FAILURE'|'NOT_STARTED' $VerificationStatus
 * @property Shapes\VerificationInfo $VerificationInfo
 */
class GetEmailIdentityResponse extends Response
{
}
