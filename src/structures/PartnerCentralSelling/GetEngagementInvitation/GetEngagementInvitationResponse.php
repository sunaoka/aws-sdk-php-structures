<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagementInvitation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string $Catalog
 * @property string|null $EngagementDescription
 * @property string|null $EngagementId
 * @property string|null $EngagementTitle
 * @property list<Shapes\EngagementMemberSummary>|null $ExistingMembers
 * @property \Aws\Api\DateTimeResult|null $ExpirationDate
 * @property string $Id
 * @property \Aws\Api\DateTimeResult|null $InvitationDate
 * @property string|null $InvitationMessage
 * @property Shapes\Payload|null $Payload
 * @property 'OpportunityInvitation'|null $PayloadType
 * @property Shapes\Receiver|null $Receiver
 * @property string|null $RejectionReason
 * @property string|null $SenderAwsAccountId
 * @property string|null $SenderCompanyName
 * @property 'ACCEPTED'|'PENDING'|'REJECTED'|'EXPIRED'|null $Status
 */
class GetEngagementInvitationResponse extends Response
{
}
