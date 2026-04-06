<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListAssetContracts;

trait ListAssetContractsTrait
{
    /**
     * @param ListAssetContractsRequest $args
     * @return ListAssetContractsResponse
     */
    public function listAssetContracts(ListAssetContractsRequest $args)
    {
        $result = parent::listAssetContracts($args->toArray());
        return new ListAssetContractsResponse($result->toArray());
    }
}
