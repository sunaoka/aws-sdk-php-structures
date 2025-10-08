<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkInstance;

trait GetSolNetworkInstanceTrait
{
    /**
     * @param GetSolNetworkInstanceRequest $args
     * @return GetSolNetworkInstanceResponse
     */
    public function getSolNetworkInstance(GetSolNetworkInstanceRequest $args)
    {
        $result = parent::getSolNetworkInstance($args->toArray());
        return new GetSolNetworkInstanceResponse($result->toArray());
    }
}
