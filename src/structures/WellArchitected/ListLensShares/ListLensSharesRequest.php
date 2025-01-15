<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLensShares;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LensAlias
 * @property string|null $SharedWithPrefix
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 * @property 'ACCEPTED'|'REJECTED'|'PENDING'|'REVOKED'|'EXPIRED'|'ASSOCIATING'|'ASSOCIATED'|'FAILED'|null $Status
 */
class ListLensSharesRequest extends Request
{
    /**
     * @param array{
     *     LensAlias: string,
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
