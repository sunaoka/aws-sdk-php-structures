<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\GetTransaction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $transactionHash
 * @property string|null $transactionId
 * @property 'ETHEREUM_MAINNET'|'ETHEREUM_SEPOLIA_TESTNET'|'BITCOIN_MAINNET'|'BITCOIN_TESTNET' $network
 */
class GetTransactionRequest extends Request
{
    /**
     * @param array{
     *     transactionHash?: string|null,
     *     transactionId?: string|null,
     *     network: 'ETHEREUM_MAINNET'|'ETHEREUM_SEPOLIA_TESTNET'|'BITCOIN_MAINNET'|'BITCOIN_TESTNET'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
