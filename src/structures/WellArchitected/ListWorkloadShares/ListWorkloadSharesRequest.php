<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListWorkloadShares;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string|null $SharedWithPrefix
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 * @property 'ACCEPTED'|'REJECTED'|'PENDING'|'REVOKED'|'EXPIRED'|'ASSOCIATING'|'ASSOCIATED'|'FAILED'|null $Status
 */
class ListWorkloadSharesRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     SharedWithPrefix?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null,
     *     Status?: 'ACCEPTED'|'REJECTED'|'PENDING'|'REVOKED'|'EXPIRED'|'ASSOCIATING'|'ASSOCIATED'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
