<?php

namespace Sunaoka\Aws\Structures\Tnb\DeleteSolNetworkInstance;

trait DeleteSolNetworkInstanceTrait
{
    /**
     * @param DeleteSolNetworkInstanceRequest $args
     * @return void
     */
    public function deleteSolNetworkInstance(DeleteSolNetworkInstanceRequest $args)
    {
        parent::deleteSolNetworkInstance($args->toArray());
    }
}
