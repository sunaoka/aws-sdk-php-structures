<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagementInvitation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property 'OpportunityInvitation'|'LeadInvitation'|null $PayloadType
 * @property string $Id
 * @property string|null $EngagementId
 * @property string|null $EngagementTitle
 * @property 'ACCEPTED'|'PENDING'|'REJECTED'|'EXPIRED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $InvitationDate
 * @property \Aws\Api\DateTimeResult|null $ExpirationDate
 * @property string|null $SenderAwsAccountId
 * @property string|null $SenderCompanyName
 * @property Shapes\Receiver|null $Receiver
 * @property string $Catalog
 * @property string|null $RejectionReason
 * @property Shapes\Payload|null $Payload
 * @property string|null $InvitationMessage
 * @property string|null $EngagementDescription
 * @property list<Shapes\EngagementMemberSummary>|null $ExistingMembers
 */
class GetEngagementInvitationResponse extends Response
{
}
