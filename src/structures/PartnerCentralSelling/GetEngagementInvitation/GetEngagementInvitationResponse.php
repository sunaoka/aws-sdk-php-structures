<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagementInvitation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Catalog
 * @property string $EngagementDescription
 * @property string $EngagementId
 * @property string $EngagementTitle
 * @property list<Shapes\EngagementMemberSummary> $ExistingMembers
 * @property \Aws\Api\DateTimeResult $ExpirationDate
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $InvitationDate
 * @property string $InvitationMessage
 * @property Shapes\Payload $Payload
 * @property 'OpportunityInvitation' $PayloadType
 * @property Shapes\Receiver $Receiver
 * @property string $RejectionReason
 * @property string $SenderAwsAccountId
 * @property string $SenderCompanyName
 * @property 'ACCEPTED'|'PENDING'|'REJECTED'|'EXPIRED' $Status
 */
class GetEngagementInvitationResponse extends Response
{
}
