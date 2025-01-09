<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListProposals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProposalId
 * @property string $Description
 * @property string $ProposedByMemberId
 * @property string $ProposedByMemberName
 * @property 'IN_PROGRESS'|'APPROVED'|'REJECTED'|'EXPIRED'|'ACTION_FAILED' $Status
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $ExpirationDate
 * @property string $Arn
 */
class ProposalSummary extends Shape
{
    /**
     * @param array{
     *     ProposalId?: string,
     *     Description?: string,
     *     ProposedByMemberId?: string,
     *     ProposedByMemberName?: string,
     *     Status?: 'IN_PROGRESS'|'APPROVED'|'REJECTED'|'EXPIRED'|'ACTION_FAILED',
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     ExpirationDate?: \Aws\Api\DateTimeResult,
     *     Arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
