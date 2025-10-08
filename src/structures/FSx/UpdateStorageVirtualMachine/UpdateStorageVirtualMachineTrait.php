<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateStorageVirtualMachine;

trait UpdateStorageVirtualMachineTrait
{
    /**
     * @param UpdateStorageVirtualMachineRequest $args
     * @return UpdateStorageVirtualMachineResponse
     */
    public function updateStorageVirtualMachine(UpdateStorageVirtualMachineRequest $args)
    {
        $result = parent::updateStorageVirtualMachine($args->toArray());
        return new UpdateStorageVirtualMachineResponse($result->toArray());
    }
}
