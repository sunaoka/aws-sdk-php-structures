<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListProposals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProposalId
 * @property string|null $Description
 * @property string|null $ProposedByMemberId
 * @property string|null $ProposedByMemberName
 * @property 'IN_PROGRESS'|'APPROVED'|'REJECTED'|'EXPIRED'|'ACTION_FAILED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $ExpirationDate
 * @property string|null $Arn
 */
class ProposalSummary extends Shape
{
    /**
     * @param array{
     *     ProposalId?: string|null,
     *     Description?: string|null,
     *     ProposedByMemberId?: string|null,
     *     ProposedByMemberName?: string|null,
     *     Status?: 'IN_PROGRESS'|'APPROVED'|'REJECTED'|'EXPIRED'|'ACTION_FAILED'|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     ExpirationDate?: \Aws\Api\DateTimeResult|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
