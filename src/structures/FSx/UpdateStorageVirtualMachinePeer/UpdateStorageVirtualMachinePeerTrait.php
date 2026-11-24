<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateStorageVirtualMachinePeer;

trait UpdateStorageVirtualMachinePeerTrait
{
    /**
     * @param UpdateStorageVirtualMachinePeerRequest $args
     * @return UpdateStorageVirtualMachinePeerResponse
     */
    public function updateStorageVirtualMachinePeer(UpdateStorageVirtualMachinePeerRequest $args)
    {
        $result = parent::updateStorageVirtualMachinePeer($args->toArray());
        return new UpdateStorageVirtualMachinePeerResponse($result->toArray());
    }
}
