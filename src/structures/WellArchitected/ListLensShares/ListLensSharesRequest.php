<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLensShares;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LensAlias
 * @property string $SharedWithPrefix
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'ACCEPTED'|'REJECTED'|'PENDING'|'REVOKED'|'EXPIRED'|'ASSOCIATING'|'ASSOCIATED'|'FAILED' $Status
 */
class ListLensSharesRequest extends Request
{
    /**
     * @param array{
     *     LensAlias: string,
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
