<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListTransactions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $address
 * @property 'ETHEREUM_MAINNET'|'BITCOIN_MAINNET' $network
 * @property Shapes\BlockchainInstant|null $fromBlockchainInstant
 * @property Shapes\BlockchainInstant|null $toBlockchainInstant
 * @property Shapes\ListTransactionsSort|null $sort
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListTransactionsRequest extends Request
{
    /**
     * @param array{
     *     address: string,
     *     network: 'ETHEREUM_MAINNET'|'BITCOIN_MAINNET',
     *     fromBlockchainInstant?: Shapes\BlockchainInstant|null,
     *     toBlockchainInstant?: Shapes\BlockchainInstant|null,
     *     sort?: Shapes\ListTransactionsSort|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
