<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementInvitations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property 'OpportunityInvitation'|null $PayloadType
 * @property string $Id
 * @property string|null $EngagementId
 * @property string|null $EngagementTitle
 * @property 'ACCEPTED'|'PENDING'|'REJECTED'|'EXPIRED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $InvitationDate
 * @property \Aws\Api\DateTimeResult|null $ExpirationDate
 * @property string|null $SenderAwsAccountId
 * @property string|null $SenderCompanyName
 * @property Receiver|null $Receiver
 * @property string $Catalog
 * @property 'SENDER'|'RECEIVER'|null $ParticipantType
 */
class EngagementInvitationSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     PayloadType?: 'OpportunityInvitation'|null,
     *     Id: string,
     *     EngagementId?: string|null,
     *     EngagementTitle?: string|null,
     *     Status?: 'ACCEPTED'|'PENDING'|'REJECTED'|'EXPIRED'|null,
     *     InvitationDate?: \Aws\Api\DateTimeResult|null,
     *     ExpirationDate?: \Aws\Api\DateTimeResult|null,
     *     SenderAwsAccountId?: string|null,
     *     SenderCompanyName?: string|null,
     *     Receiver?: Receiver|null,
     *     Catalog: string,
     *     ParticipantType?: 'SENDER'|'RECEIVER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
