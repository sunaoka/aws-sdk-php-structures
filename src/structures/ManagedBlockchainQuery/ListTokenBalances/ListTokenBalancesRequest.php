<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListTokenBalances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\OwnerFilter $ownerFilter
 * @property Shapes\TokenFilter $tokenFilter
 * @property string $nextToken
 * @property int $maxResults
 */
class ListTokenBalancesRequest extends Request
{
    /**
     * @param array{
     *     ownerFilter?: Shapes\OwnerFilter,
     *     tokenFilter: Shapes\TokenFilter,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
