<?php

namespace Sunaoka\Aws\Structures\BackupGateway\ListVirtualMachines;

trait ListVirtualMachinesTrait
{
    /**
     * @param ListVirtualMachinesRequest $args
     * @return ListVirtualMachinesResponse
     */
    public function listVirtualMachines(ListVirtualMachinesRequest $args)
    {
        $result = parent::listVirtualMachines($args->toArray());
        return new ListVirtualMachinesResponse($result->toArray());
    }
}
