<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\GetTransaction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ETHEREUM_MAINNET'|'ETHEREUM_SEPOLIA_TESTNET'|'BITCOIN_MAINNET'|'BITCOIN_TESTNET' $network
 * @property string|null $blockHash
 * @property string $transactionHash
 * @property string|null $blockNumber
 * @property \Aws\Api\DateTimeResult $transactionTimestamp
 * @property int $transactionIndex
 * @property int $numberOfTransactions
 * @property string $to
 * @property string|null $from
 * @property string|null $contractAddress
 * @property string|null $gasUsed
 * @property string|null $cumulativeGasUsed
 * @property string|null $effectiveGasPrice
 * @property int|null $signatureV
 * @property string|null $signatureR
 * @property string|null $signatureS
 * @property string|null $transactionFee
 * @property string|null $transactionId
 * @property 'FINAL'|'NONFINAL'|null $confirmationStatus
 * @property 'FAILED'|'SUCCEEDED'|null $executionStatus
 */
class Transaction extends Shape
{
    /**
     * @param array{
     *     network: 'ETHEREUM_MAINNET'|'ETHEREUM_SEPOLIA_TESTNET'|'BITCOIN_MAINNET'|'BITCOIN_TESTNET',
     *     blockHash?: string|null,
     *     transactionHash: string,
     *     blockNumber?: string|null,
     *     transactionTimestamp: \Aws\Api\DateTimeResult,
     *     transactionIndex: int,
     *     numberOfTransactions: int,
     *     to: string,
     *     from?: string|null,
     *     contractAddress?: string|null,
     *     gasUsed?: string|null,
     *     cumulativeGasUsed?: string|null,
     *     effectiveGasPrice?: string|null,
     *     signatureV?: int|null,
     *     signatureR?: string|null,
     *     signatureS?: string|null,
     *     transactionFee?: string|null,
     *     transactionId?: string|null,
     *     confirmationStatus?: 'FINAL'|'NONFINAL'|null,
     *     executionStatus?: 'FAILED'|'SUCCEEDED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
