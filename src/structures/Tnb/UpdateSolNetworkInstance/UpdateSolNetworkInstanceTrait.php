<?php

namespace Sunaoka\Aws\Structures\Tnb\UpdateSolNetworkInstance;

trait UpdateSolNetworkInstanceTrait
{
    /**
     * @param UpdateSolNetworkInstanceRequest $args
     * @return UpdateSolNetworkInstanceResponse
     */
    public function updateSolNetworkInstance(UpdateSolNetworkInstanceRequest $args)
    {
        $result = parent::updateSolNetworkInstance($args->toArray());
        return new UpdateSolNetworkInstanceResponse($result->toArray());
    }
}
