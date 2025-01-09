<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListAssetContracts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContractIdentifier $contractIdentifier
 * @property 'ERC20'|'ERC721'|'ERC1155' $tokenStandard
 * @property string $deployerAddress
 */
class AssetContract extends Shape
{
    /**
     * @param array{
     *     contractIdentifier: ContractIdentifier,
     *     tokenStandard: 'ERC20'|'ERC721'|'ERC1155',
     *     deployerAddress: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
