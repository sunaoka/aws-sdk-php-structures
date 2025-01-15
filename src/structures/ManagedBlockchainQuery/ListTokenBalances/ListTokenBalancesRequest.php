<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListTokenBalances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\OwnerFilter|null $ownerFilter
 * @property Shapes\TokenFilter $tokenFilter
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListTokenBalancesRequest extends Request
{
    /**
     * @param array{
     *     ownerFilter?: Shapes\OwnerFilter|null,
     *     tokenFilter: Shapes\TokenFilter,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
