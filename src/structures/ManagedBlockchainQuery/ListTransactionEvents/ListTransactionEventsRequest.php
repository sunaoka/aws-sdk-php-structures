<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListTransactionEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $transactionHash
 * @property string $transactionId
 * @property 'ETHEREUM_MAINNET'|'ETHEREUM_SEPOLIA_TESTNET'|'BITCOIN_MAINNET'|'BITCOIN_TESTNET' $network
 * @property string $nextToken
 * @property int $maxResults
 */
class ListTransactionEventsRequest extends Request
{
    /**
     * @param array{
     *     transactionHash?: string,
     *     transactionId?: string,
     *     network: 'ETHEREUM_MAINNET'|'ETHEREUM_SEPOLIA_TESTNET'|'BITCOIN_MAINNET'|'BITCOIN_TESTNET',
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
