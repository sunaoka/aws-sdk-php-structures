<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListAssetContracts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ContractFilter $contractFilter
 * @property string $nextToken
 * @property int $maxResults
 */
class ListAssetContractsRequest extends Request
{
    /**
     * @param array{
     *     contractFilter: Shapes\ContractFilter,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
