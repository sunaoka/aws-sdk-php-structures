<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListWorkloadShares;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string $SharedWithPrefix
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'ACCEPTED'|'REJECTED'|'PENDING'|'REVOKED'|'EXPIRED'|'ASSOCIATING'|'ASSOCIATED'|'FAILED' $Status
 */
class ListWorkloadSharesRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     SharedWithPrefix?: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Status?: 'ACCEPTED'|'REJECTED'|'PENDING'|'REVOKED'|'EXPIRED'|'ASSOCIATING'|'ASSOCIATED'|'FAILED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
