<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\GetAssetContract;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ContractIdentifier $contractIdentifier
 */
class GetAssetContractRequest extends Request
{
    /**
     * @param array{contractIdentifier: Shapes\ContractIdentifier} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
