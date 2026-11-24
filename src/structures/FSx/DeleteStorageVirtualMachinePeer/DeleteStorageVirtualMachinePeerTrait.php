<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteStorageVirtualMachinePeer;

trait DeleteStorageVirtualMachinePeerTrait
{
    /**
     * @param DeleteStorageVirtualMachinePeerRequest $args
     * @return DeleteStorageVirtualMachinePeerResponse
     */
    public function deleteStorageVirtualMachinePeer(DeleteStorageVirtualMachinePeerRequest $args)
    {
        $result = parent::deleteStorageVirtualMachinePeer($args->toArray());
        return new DeleteStorageVirtualMachinePeerResponse($result->toArray());
    }
}
