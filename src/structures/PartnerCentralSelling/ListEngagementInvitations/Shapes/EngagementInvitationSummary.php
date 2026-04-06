<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementInvitations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string $Catalog
 * @property string|null $EngagementId
 * @property string|null $EngagementTitle
 * @property \Aws\Api\DateTimeResult|null $ExpirationDate
 * @property string $Id
 * @property \Aws\Api\DateTimeResult|null $InvitationDate
 * @property 'SENDER'|'RECEIVER'|null $ParticipantType
 * @property 'OpportunityInvitation'|null $PayloadType
 * @property Receiver|null $Receiver
 * @property string|null $SenderAwsAccountId
 * @property string|null $SenderCompanyName
 * @property 'ACCEPTED'|'PENDING'|'REJECTED'|'EXPIRED'|null $Status
 */
class EngagementInvitationSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Catalog: string,
     *     EngagementId?: string|null,
     *     EngagementTitle?: string|null,
     *     ExpirationDate?: \Aws\Api\DateTimeResult|null,
     *     Id: string,
     *     InvitationDate?: \Aws\Api\DateTimeResult|null,
     *     ParticipantType?: 'SENDER'|'RECEIVER'|null,
     *     PayloadType?: 'OpportunityInvitation'|null,
     *     Receiver?: Receiver|null,
     *     SenderAwsAccountId?: string|null,
     *     SenderCompanyName?: string|null,
     *     Status?: 'ACCEPTED'|'PENDING'|'REJECTED'|'EXPIRED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
