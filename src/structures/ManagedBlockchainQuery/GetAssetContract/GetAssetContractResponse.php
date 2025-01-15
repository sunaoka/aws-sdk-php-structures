<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\GetAssetContract;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ContractIdentifier $contractIdentifier
 * @property 'ERC20'|'ERC721'|'ERC1155' $tokenStandard
 * @property string $deployerAddress
 * @property Shapes\ContractMetadata|null $metadata
 */
class GetAssetContractResponse extends Response
{
}
