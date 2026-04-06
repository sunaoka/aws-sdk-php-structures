<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListAssetContracts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ContractFilter $contractFilter
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListAssetContractsRequest extends Request
{
    /**
     * @param array{
     *     contractFilter: Shapes\ContractFilter,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
