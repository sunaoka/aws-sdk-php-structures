<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\GetTransaction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ETHEREUM_MAINNET'|'ETHEREUM_SEPOLIA_TESTNET'|'BITCOIN_MAINNET'|'BITCOIN_TESTNET' $network
 * @property string $blockHash
 * @property string $transactionHash
 * @property string $blockNumber
 * @property \Aws\Api\DateTimeResult $transactionTimestamp
 * @property int $transactionIndex
 * @property int $numberOfTransactions
 * @property string $to
 * @property string $from
 * @property string $contractAddress
 * @property string $gasUsed
 * @property string $cumulativeGasUsed
 * @property string $effectiveGasPrice
 * @property int $signatureV
 * @property string $signatureR
 * @property string $signatureS
 * @property string $transactionFee
 * @property string $transactionId
 * @property 'FINAL'|'NONFINAL' $confirmationStatus
 * @property 'FAILED'|'SUCCEEDED' $executionStatus
 */
class Transaction extends Shape
{
    /**
     * @param array{
     *     network: 'ETHEREUM_MAINNET'|'ETHEREUM_SEPOLIA_TESTNET'|'BITCOIN_MAINNET'|'BITCOIN_TESTNET',
     *     blockHash?: string,
     *     transactionHash: string,
     *     blockNumber?: string,
     *     transactionTimestamp: \Aws\Api\DateTimeResult,
     *     transactionIndex: int,
     *     numberOfTransactions: int,
     *     to: string,
     *     from?: string,
     *     contractAddress?: string,
     *     gasUsed?: string,
     *     cumulativeGasUsed?: string,
     *     effectiveGasPrice?: string,
     *     signatureV?: int,
     *     signatureR?: string,
     *     signatureS?: string,
     *     transactionFee?: string,
     *     transactionId?: string,
     *     confirmationStatus?: 'FINAL'|'NONFINAL',
     *     executionStatus?: 'FAILED'|'SUCCEEDED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
