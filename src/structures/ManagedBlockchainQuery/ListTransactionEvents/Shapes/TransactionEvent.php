<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListTransactionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ETHEREUM_MAINNET'|'BITCOIN_MAINNET' $network
 * @property string $transactionHash
 * @property 'ERC20_TRANSFER'|'ERC20_MINT'|'ERC20_BURN'|'ERC20_DEPOSIT'|'ERC20_WITHDRAWAL'|'ERC721_TRANSFER'|'ERC1155_TRANSFER'|'BITCOIN_VIN'|'BITCOIN_VOUT'|'INTERNAL_ETH_TRANSFER'|'ETH_TRANSFER' $eventType
 * @property string|null $from
 * @property string|null $to
 * @property string|null $value
 * @property string|null $contractAddress
 * @property string|null $tokenId
 * @property string|null $transactionId
 * @property int|null $voutIndex
 */
class TransactionEvent extends Shape
{
    /**
     * @param array{
     *     network: 'ETHEREUM_MAINNET'|'BITCOIN_MAINNET',
     *     transactionHash: string,
     *     eventType: 'ERC20_TRANSFER'|'ERC20_MINT'|'ERC20_BURN'|'ERC20_DEPOSIT'|'ERC20_WITHDRAWAL'|'ERC721_TRANSFER'|'ERC1155_TRANSFER'|'BITCOIN_VIN'|'BITCOIN_VOUT'|'INTERNAL_ETH_TRANSFER'|'ETH_TRANSFER',
     *     from?: string|null,
     *     to?: string|null,
     *     value?: string|null,
     *     contractAddress?: string|null,
     *     tokenId?: string|null,
     *     transactionId?: string|null,
     *     voutIndex?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
