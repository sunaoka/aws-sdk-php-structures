<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListTransactionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ETHEREUM_MAINNET'|'ETHEREUM_SEPOLIA_TESTNET'|'BITCOIN_MAINNET'|'BITCOIN_TESTNET' $network
 * @property string $transactionHash
 * @property 'ERC20_TRANSFER'|'ERC20_MINT'|'ERC20_BURN'|'ERC20_DEPOSIT'|'ERC20_WITHDRAWAL'|'ERC721_TRANSFER'|'ERC1155_TRANSFER'|'BITCOIN_VIN'|'BITCOIN_VOUT'|'INTERNAL_ETH_TRANSFER'|'ETH_TRANSFER' $eventType
 * @property string $from
 * @property string $to
 * @property string $value
 * @property string $contractAddress
 * @property string $tokenId
 * @property string $transactionId
 * @property int $voutIndex
 * @property bool $voutSpent
 * @property string $spentVoutTransactionId
 * @property string $spentVoutTransactionHash
 * @property int $spentVoutIndex
 * @property BlockchainInstant $blockchainInstant
 * @property 'FINAL'|'NONFINAL' $confirmationStatus
 */
class TransactionEvent extends Shape
{
    /**
     * @param array{
     *     network: 'ETHEREUM_MAINNET'|'ETHEREUM_SEPOLIA_TESTNET'|'BITCOIN_MAINNET'|'BITCOIN_TESTNET',
     *     transactionHash: string,
     *     eventType: 'ERC20_TRANSFER'|'ERC20_MINT'|'ERC20_BURN'|'ERC20_DEPOSIT'|'ERC20_WITHDRAWAL'|'ERC721_TRANSFER'|'ERC1155_TRANSFER'|'BITCOIN_VIN'|'BITCOIN_VOUT'|'INTERNAL_ETH_TRANSFER'|'ETH_TRANSFER',
     *     from?: string,
     *     to?: string,
     *     value?: string,
     *     contractAddress?: string,
     *     tokenId?: string,
     *     transactionId?: string,
     *     voutIndex?: int,
     *     voutSpent?: bool,
     *     spentVoutTransactionId?: string,
     *     spentVoutTransactionHash?: string,
     *     spentVoutIndex?: int,
     *     blockchainInstant?: BlockchainInstant,
     *     confirmationStatus?: 'FINAL'|'NONFINAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
