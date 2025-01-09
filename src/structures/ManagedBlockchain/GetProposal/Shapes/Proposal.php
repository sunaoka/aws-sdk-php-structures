<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetProposal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProposalId
 * @property string $NetworkId
 * @property string $Description
 * @property ProposalActions $Actions
 * @property string $ProposedByMemberId
 * @property string $ProposedByMemberName
 * @property 'IN_PROGRESS'|'APPROVED'|'REJECTED'|'EXPIRED'|'ACTION_FAILED' $Status
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $ExpirationDate
 * @property int $YesVoteCount
 * @property int $NoVoteCount
 * @property int $OutstandingVoteCount
 * @property array<string, string> $Tags
 * @property string $Arn
 */
class Proposal extends Shape
{
    /**
     * @param array{
     *     ProposalId?: string,
     *     NetworkId?: string,
     *     Description?: string,
     *     Actions?: ProposalActions,
     *     ProposedByMemberId?: string,
     *     ProposedByMemberName?: string,
     *     Status?: 'IN_PROGRESS'|'APPROVED'|'REJECTED'|'EXPIRED'|'ACTION_FAILED',
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     ExpirationDate?: \Aws\Api\DateTimeResult,
     *     YesVoteCount?: int,
     *     NoVoteCount?: int,
     *     OutstandingVoteCount?: int,
     *     Tags?: array<string, string>,
     *     Arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
