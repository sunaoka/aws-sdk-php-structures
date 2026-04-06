<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\ListConnectionInvitations\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
 */
class ConnectionInvitationSummary extends Shape
{
    /**
     * @param array{
     *     Catalog: string,
     *     Id: string,
     *     Arn: string,
     *     ConnectionId?: string|null,
     *     ConnectionType: 'OPPORTUNITY_COLLABORATION'|'SUBSIDIARY',
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt: \Aws\Api\DateTimeResult,
     *     ExpiresAt?: \Aws\Api\DateTimeResult|null,
     *     OtherParticipantIdentifier: string,
     *     ParticipantType: 'SENDER'|'RECEIVER',
     *     Status: 'PENDING'|'ACCEPTED'|'REJECTED'|'CANCELED'|'EXPIRED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
