<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\GetTransaction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $transactionHash
 * @property 'ETHEREUM_MAINNET'|'BITCOIN_MAINNET' $network
 */
class GetTransactionRequest extends Request
{
    /**
     * @param array{
     *     transactionHash: string,
     *     network: 'ETHEREUM_MAINNET'|'BITCOIN_MAINNET'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
