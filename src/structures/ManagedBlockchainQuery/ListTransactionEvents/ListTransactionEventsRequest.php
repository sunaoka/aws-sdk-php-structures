<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListTransactionEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $transactionHash
 * @property 'ETHEREUM_MAINNET'|'BITCOIN_MAINNET' $network
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListTransactionEventsRequest extends Request
{
    /**
     * @param array{
     *     transactionHash: string,
     *     network: 'ETHEREUM_MAINNET'|'BITCOIN_MAINNET',
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
