<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListTransactions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $transactionHash
 * @property 'ETHEREUM_MAINNET'|'BITCOIN_MAINNET' $network
 * @property \Aws\Api\DateTimeResult $transactionTimestamp
 */
class TransactionOutputItem extends Shape
{
    /**
     * @param array{
     *     transactionHash: string,
     *     network: 'ETHEREUM_MAINNET'|'BITCOIN_MAINNET',
     *     transactionTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
