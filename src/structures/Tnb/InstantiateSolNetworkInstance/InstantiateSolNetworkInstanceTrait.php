<?php

namespace Sunaoka\Aws\Structures\Tnb\InstantiateSolNetworkInstance;

trait InstantiateSolNetworkInstanceTrait
{
    /**
     * @param InstantiateSolNetworkInstanceRequest $args
     * @return InstantiateSolNetworkInstanceResponse
     */
    public function instantiateSolNetworkInstance(InstantiateSolNetworkInstanceRequest $args)
    {
        $result = parent::instantiateSolNetworkInstance($args->toArray());
        return new InstantiateSolNetworkInstanceResponse($result->toArray());
    }
}
