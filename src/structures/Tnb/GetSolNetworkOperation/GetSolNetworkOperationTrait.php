<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkOperation;

trait GetSolNetworkOperationTrait
{
    /**
     * @param GetSolNetworkOperationRequest $args
     * @return GetSolNetworkOperationResponse
     */
    public function getSolNetworkOperation(GetSolNetworkOperationRequest $args)
    {
        $result = parent::getSolNetworkOperation($args->toArray());
        return new GetSolNetworkOperationResponse($result->toArray());
    }
}
