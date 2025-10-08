<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteStorageVirtualMachine;

trait DeleteStorageVirtualMachineTrait
{
    /**
     * @param DeleteStorageVirtualMachineRequest $args
     * @return DeleteStorageVirtualMachineResponse
     */
    public function deleteStorageVirtualMachine(DeleteStorageVirtualMachineRequest $args)
    {
        $result = parent::deleteStorageVirtualMachine($args->toArray());
        return new DeleteStorageVirtualMachineResponse($result->toArray());
    }
}
