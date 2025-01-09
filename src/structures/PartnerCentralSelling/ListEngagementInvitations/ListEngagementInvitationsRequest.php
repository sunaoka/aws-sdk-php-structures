<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementInvitations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property list<string> $EngagementIdentifier
 * @property int $MaxResults
 * @property string $NextToken
 * @property 'SENDER'|'RECEIVER' $ParticipantType
 * @property list<'OpportunityInvitation'> $PayloadType
 * @property list<string> $SenderAwsAccountId
 * @property Shapes\OpportunityEngagementInvitationSort $Sort
 * @property list<'ACCEPTED'|'PENDING'|'REJECTED'|'EXPIRED'> $Status
 */
class ListEngagementInvitationsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     EngagementIdentifier?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     ParticipantType: 'SENDER'|'RECEIVER',
     *     PayloadType?: list<'OpportunityInvitation'>,
     *     SenderAwsAccountId?: list<string>,
     *     Sort?: Shapes\OpportunityEngagementInvitationSort,
     *     Status?: list<'ACCEPTED'|'PENDING'|'REJECTED'|'EXPIRED'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
