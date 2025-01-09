<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListTransactions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $address
 * @property 'ETHEREUM_MAINNET'|'ETHEREUM_SEPOLIA_TESTNET'|'BITCOIN_MAINNET'|'BITCOIN_TESTNET' $network
 * @property Shapes\BlockchainInstant $fromBlockchainInstant
 * @property Shapes\BlockchainInstant $toBlockchainInstant
 * @property Shapes\ListTransactionsSort $sort
 * @property string $nextToken
 * @property int $maxResults
 * @property Shapes\ConfirmationStatusFilter $confirmationStatusFilter
 */
class ListTransactionsRequest extends Request
{
    /**
     * @param array{
     *     address: string,
     *     network: 'ETHEREUM_MAINNET'|'ETHEREUM_SEPOLIA_TESTNET'|'BITCOIN_MAINNET'|'BITCOIN_TESTNET',
     *     fromBlockchainInstant?: Shapes\BlockchainInstant,
     *     toBlockchainInstant?: Shapes\BlockchainInstant,
     *     sort?: Shapes\ListTransactionsSort,
     *     nextToken?: string,
     *     maxResults?: int,
     *     confirmationStatusFilter?: Shapes\ConfirmationStatusFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
