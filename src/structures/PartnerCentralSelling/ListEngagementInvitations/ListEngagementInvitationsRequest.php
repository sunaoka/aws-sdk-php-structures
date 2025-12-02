<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementInvitations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\OpportunityEngagementInvitationSort|null $Sort
 * @property list<'OpportunityInvitation'|'LeadInvitation'>|null $PayloadType
 * @property 'SENDER'|'RECEIVER' $ParticipantType
 * @property list<'ACCEPTED'|'PENDING'|'REJECTED'|'EXPIRED'>|null $Status
 * @property list<string>|null $EngagementIdentifier
 * @property list<string>|null $SenderAwsAccountId
 */
class ListEngagementInvitationsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Sort?: Shapes\OpportunityEngagementInvitationSort|null,
     *     PayloadType?: list<'OpportunityInvitation'|'LeadInvitation'>|null,
     *     ParticipantType: 'SENDER'|'RECEIVER',
     *     Status?: list<'ACCEPTED'|'PENDING'|'REJECTED'|'EXPIRED'>|null,
     *     EngagementIdentifier?: list<string>|null,
     *     SenderAwsAccountId?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
