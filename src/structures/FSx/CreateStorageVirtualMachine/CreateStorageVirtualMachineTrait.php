<?php

namespace Sunaoka\Aws\Structures\FSx\CreateStorageVirtualMachine;

trait CreateStorageVirtualMachineTrait
{
    /**
     * @param CreateStorageVirtualMachineRequest $args
     * @return CreateStorageVirtualMachineResponse
     */
    public function createStorageVirtualMachine(CreateStorageVirtualMachineRequest $args)
    {
        $result = parent::createStorageVirtualMachine($args->toArray());
        return new CreateStorageVirtualMachineResponse($result->toArray());
    }
}
