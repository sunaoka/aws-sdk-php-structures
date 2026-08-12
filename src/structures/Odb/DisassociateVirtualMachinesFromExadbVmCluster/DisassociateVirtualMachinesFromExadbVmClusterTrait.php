<?php

namespace Sunaoka\Aws\Structures\Odb\DisassociateVirtualMachinesFromExadbVmCluster;

trait DisassociateVirtualMachinesFromExadbVmClusterTrait
{
    /**
     * @param DisassociateVirtualMachinesFromExadbVmClusterRequest $args
     * @return DisassociateVirtualMachinesFromExadbVmClusterResponse
     */
    public function disassociateVirtualMachinesFromExadbVmCluster(DisassociateVirtualMachinesFromExadbVmClusterRequest $args)
    {
        $result = parent::disassociateVirtualMachinesFromExadbVmCluster($args->toArray());
        return new DisassociateVirtualMachinesFromExadbVmClusterResponse($result->toArray());
    }
}
