<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeStorageVirtualMachines;

trait DescribeStorageVirtualMachinesTrait
{
    /**
     * @param DescribeStorageVirtualMachinesRequest $args
     * @return DescribeStorageVirtualMachinesResponse
     */
    public function describeStorageVirtualMachines(DescribeStorageVirtualMachinesRequest $args)
    {
        $result = parent::describeStorageVirtualMachines($args->toArray());
        return new DescribeStorageVirtualMachinesResponse($result->toArray());
    }
}
