<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementInvitations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property list<string>|null $EngagementIdentifier
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property 'SENDER'|'RECEIVER' $ParticipantType
 * @property list<'OpportunityInvitation'>|null $PayloadType
 * @property list<string>|null $SenderAwsAccountId
 * @property Shapes\OpportunityEngagementInvitationSort|null $Sort
 * @property list<'ACCEPTED'|'PENDING'|'REJECTED'|'EXPIRED'>|null $Status
 */
class ListEngagementInvitationsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     EngagementIdentifier?: list<string>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     ParticipantType: 'SENDER'|'RECEIVER',
     *     PayloadType?: list<'OpportunityInvitation'>|null,
     *     SenderAwsAccountId?: list<string>|null,
     *     Sort?: Shapes\OpportunityEngagementInvitationSort|null,
     *     Status?: list<'ACCEPTED'|'PENDING'|'REJECTED'|'EXPIRED'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
