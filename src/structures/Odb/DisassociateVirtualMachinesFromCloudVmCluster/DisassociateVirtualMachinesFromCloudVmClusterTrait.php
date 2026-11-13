<?php

namespace Sunaoka\Aws\Structures\Odb\DisassociateVirtualMachinesFromCloudVmCluster;

trait DisassociateVirtualMachinesFromCloudVmClusterTrait
{
    /**
     * @param DisassociateVirtualMachinesFromCloudVmClusterRequest $args
     * @return DisassociateVirtualMachinesFromCloudVmClusterResponse
     */
    public function disassociateVirtualMachinesFromCloudVmCluster(DisassociateVirtualMachinesFromCloudVmClusterRequest $args)
    {
        $result = parent::disassociateVirtualMachinesFromCloudVmCluster($args->toArray());
        return new DisassociateVirtualMachinesFromCloudVmClusterResponse($result->toArray());
    }
}
