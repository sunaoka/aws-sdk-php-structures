<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\ListConnectionInvitations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string|null $NextToken
 * @property 'OPPORTUNITY_COLLABORATION'|'SUBSIDIARY'|null $ConnectionType
 * @property int<1, 100>|null $MaxResults
 * @property list<string>|null $OtherParticipantIdentifiers
 * @property 'SENDER'|'RECEIVER'|null $ParticipantType
 * @property 'PENDING'|'ACCEPTED'|'REJECTED'|'CANCELED'|'EXPIRED'|null $Status
 */
class ListConnectionInvitationsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     NextToken?: string|null,
     *     ConnectionType?: 'OPPORTUNITY_COLLABORATION'|'SUBSIDIARY'|null,
     *     MaxResults?: int<1, 100>|null,
     *     OtherParticipantIdentifiers?: list<string>|null,
     *     ParticipantType?: 'SENDER'|'RECEIVER'|null,
     *     Status?: 'PENDING'|'ACCEPTED'|'REJECTED'|'CANCELED'|'EXPIRED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
