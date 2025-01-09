<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementInvitations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Catalog
 * @property string $EngagementId
 * @property string $EngagementTitle
 * @property \Aws\Api\DateTimeResult $ExpirationDate
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $InvitationDate
 * @property 'SENDER'|'RECEIVER' $ParticipantType
 * @property 'OpportunityInvitation' $PayloadType
 * @property Receiver $Receiver
 * @property string $SenderAwsAccountId
 * @property string $SenderCompanyName
 * @property 'ACCEPTED'|'PENDING'|'REJECTED'|'EXPIRED' $Status
 */
class EngagementInvitationSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Catalog: string,
     *     EngagementId?: string,
     *     EngagementTitle?: string,
     *     ExpirationDate?: \Aws\Api\DateTimeResult,
     *     Id: string,
     *     InvitationDate?: \Aws\Api\DateTimeResult,
     *     ParticipantType?: 'SENDER'|'RECEIVER',
     *     PayloadType?: 'OpportunityInvitation',
     *     Receiver?: Receiver,
     *     SenderAwsAccountId?: string,
     *     SenderCompanyName?: string,
     *     Status?: 'ACCEPTED'|'PENDING'|'REJECTED'|'EXPIRED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
