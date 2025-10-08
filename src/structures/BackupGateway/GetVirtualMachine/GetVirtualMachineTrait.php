<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetVirtualMachine;

trait GetVirtualMachineTrait
{
    /**
     * @param GetVirtualMachineRequest $args
     * @return GetVirtualMachineResponse
     */
    public function getVirtualMachine(GetVirtualMachineRequest $args)
    {
        $result = parent::getVirtualMachine($args->toArray());
        return new GetVirtualMachineResponse($result->toArray());
    }
}
