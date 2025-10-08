<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousVirtualMachines;

trait ListAutonomousVirtualMachinesTrait
{
    /**
     * @param ListAutonomousVirtualMachinesRequest $args
     * @return ListAutonomousVirtualMachinesResponse
     */
    public function listAutonomousVirtualMachines(ListAutonomousVirtualMachinesRequest $args)
    {
        $result = parent::listAutonomousVirtualMachines($args->toArray());
        return new ListAutonomousVirtualMachinesResponse($result->toArray());
    }
}
