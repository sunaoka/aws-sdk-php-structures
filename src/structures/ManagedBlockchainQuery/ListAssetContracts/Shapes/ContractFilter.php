<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListAssetContracts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ETHEREUM_MAINNET'|'ETHEREUM_SEPOLIA_TESTNET'|'BITCOIN_MAINNET'|'BITCOIN_TESTNET' $network
 * @property 'ERC20'|'ERC721'|'ERC1155' $tokenStandard
 * @property string $deployerAddress
 */
class ContractFilter extends Shape
{
    /**
     * @param array{
     *     network: 'ETHEREUM_MAINNET'|'ETHEREUM_SEPOLIA_TESTNET'|'BITCOIN_MAINNET'|'BITCOIN_TESTNET',
     *     tokenStandard: 'ERC20'|'ERC721'|'ERC1155',
     *     deployerAddress: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
