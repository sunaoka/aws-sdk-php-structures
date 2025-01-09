<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListProfileShares;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileArn
 * @property string $SharedWithPrefix
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'ACCEPTED'|'REJECTED'|'PENDING'|'REVOKED'|'EXPIRED'|'ASSOCIATING'|'ASSOCIATED'|'FAILED' $Status
 */
class ListProfileSharesRequest extends Request
{
    /**
     * @param array{
     *     ProfileArn: string,
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
