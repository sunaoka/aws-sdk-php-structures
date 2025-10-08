<?php

namespace Sunaoka\Aws\Structures\Tnb\CreateSolNetworkInstance;

trait CreateSolNetworkInstanceTrait
{
    /**
     * @param CreateSolNetworkInstanceRequest $args
     * @return CreateSolNetworkInstanceResponse
     */
    public function createSolNetworkInstance(CreateSolNetworkInstanceRequest $args)
    {
        $result = parent::createSolNetworkInstance($args->toArray());
        return new CreateSolNetworkInstanceResponse($result->toArray());
    }
}
