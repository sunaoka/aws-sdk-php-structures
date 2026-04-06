<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\GetAssetContract;

trait GetAssetContractTrait
{
    /**
     * @param GetAssetContractRequest $args
     * @return GetAssetContractResponse
     */
    public function getAssetContract(GetAssetContractRequest $args)
    {
        $result = parent::getAssetContract($args->toArray());
        return new GetAssetContractResponse($result->toArray());
    }
}
