<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetProposal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProposalId
 * @property string|null $NetworkId
 * @property string|null $Description
 * @property ProposalActions|null $Actions
 * @property string|null $ProposedByMemberId
 * @property string|null $ProposedByMemberName
 * @property 'IN_PROGRESS'|'APPROVED'|'REJECTED'|'EXPIRED'|'ACTION_FAILED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $ExpirationDate
 * @property int|null $YesVoteCount
 * @property int|null $NoVoteCount
 * @property int|null $OutstandingVoteCount
 * @property array<string, string>|null $Tags
 * @property string|null $Arn
 */
class Proposal extends Shape
{
    /**
     * @param array{
     *     ProposalId?: string|null,
     *     NetworkId?: string|null,
     *     Description?: string|null,
     *     Actions?: ProposalActions|null,
     *     ProposedByMemberId?: string|null,
     *     ProposedByMemberName?: string|null,
     *     Status?: 'IN_PROGRESS'|'APPROVED'|'REJECTED'|'EXPIRED'|'ACTION_FAILED'|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     ExpirationDate?: \Aws\Api\DateTimeResult|null,
     *     YesVoteCount?: int|null,
     *     NoVoteCount?: int|null,
     *     OutstandingVoteCount?: int|null,
     *     Tags?: array<string, string>|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
