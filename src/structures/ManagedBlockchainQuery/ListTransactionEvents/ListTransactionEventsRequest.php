<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListTransactionEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $transactionHash
 * @property string|null $transactionId
 * @property 'ETHEREUM_MAINNET'|'ETHEREUM_SEPOLIA_TESTNET'|'BITCOIN_MAINNET'|'BITCOIN_TESTNET' $network
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListTransactionEventsRequest extends Request
{
    /**
     * @param array{
     *     transactionHash?: string|null,
     *     transactionId?: string|null,
     *     network: 'ETHEREUM_MAINNET'|'ETHEREUM_SEPOLIA_TESTNET'|'BITCOIN_MAINNET'|'BITCOIN_TESTNET',
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
