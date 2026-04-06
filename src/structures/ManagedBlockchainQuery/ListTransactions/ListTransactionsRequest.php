<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListTransactions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $address
 * @property 'ETHEREUM_MAINNET'|'ETHEREUM_SEPOLIA_TESTNET'|'BITCOIN_MAINNET'|'BITCOIN_TESTNET' $network
 * @property Shapes\BlockchainInstant|null $fromBlockchainInstant
 * @property Shapes\BlockchainInstant|null $toBlockchainInstant
 * @property Shapes\ListTransactionsSort|null $sort
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property Shapes\ConfirmationStatusFilter|null $confirmationStatusFilter
 */
class ListTransactionsRequest extends Request
{
    /**
     * @param array{
     *     address: string,
     *     network: 'ETHEREUM_MAINNET'|'ETHEREUM_SEPOLIA_TESTNET'|'BITCOIN_MAINNET'|'BITCOIN_TESTNET',
     *     fromBlockchainInstant?: Shapes\BlockchainInstant|null,
     *     toBlockchainInstant?: Shapes\BlockchainInstant|null,
     *     sort?: Shapes\ListTransactionsSort|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     confirmationStatusFilter?: Shapes\ConfirmationStatusFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
