<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\GetAssetContract\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ETHEREUM_MAINNET'|'ETHEREUM_SEPOLIA_TESTNET'|'BITCOIN_MAINNET'|'BITCOIN_TESTNET' $network
 * @property string $contractAddress
 */
class ContractIdentifier extends Shape
{
    /**
     * @param array{
     *     network: 'ETHEREUM_MAINNET'|'ETHEREUM_SEPOLIA_TESTNET'|'BITCOIN_MAINNET'|'BITCOIN_TESTNET',
     *     contractAddress: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
