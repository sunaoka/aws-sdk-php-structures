<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\CancelConnectionInvitation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Catalog
 * @property string $Id
 * @property string $Arn
 * @property string|null $ConnectionId
 * @property 'OPPORTUNITY_COLLABORATION'|'SUBSIDIARY' $ConnectionType
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property \Aws\Api\DateTimeResult|null $ExpiresAt
 * @property string $OtherParticipantIdentifier
 * @property 'SENDER'|'RECEIVER' $ParticipantType
 * @property 'PENDING'|'ACCEPTED'|'REJECTED'|'CANCELED'|'EXPIRED' $Status
 * @property string $InvitationMessage
 * @property string $InviterEmail
 * @property string $InviterName
 */
class CancelConnectionInvitationResponse extends Response
{
}
