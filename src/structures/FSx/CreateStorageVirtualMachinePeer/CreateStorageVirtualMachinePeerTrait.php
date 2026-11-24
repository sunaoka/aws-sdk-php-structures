<?php

namespace Sunaoka\Aws\Structures\FSx\CreateStorageVirtualMachinePeer;

trait CreateStorageVirtualMachinePeerTrait
{
    /**
     * @param CreateStorageVirtualMachinePeerRequest $args
     * @return CreateStorageVirtualMachinePeerResponse
     */
    public function createStorageVirtualMachinePeer(CreateStorageVirtualMachinePeerRequest $args)
    {
        $result = parent::createStorageVirtualMachinePeer($args->toArray());
        return new CreateStorageVirtualMachinePeerResponse($result->toArray());
    }
}
