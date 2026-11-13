<?php

namespace Sunaoka\Aws\Structures\Odb\AssociateVirtualMachinesToCloudVmCluster;

trait AssociateVirtualMachinesToCloudVmClusterTrait
{
    /**
     * @param AssociateVirtualMachinesToCloudVmClusterRequest $args
     * @return AssociateVirtualMachinesToCloudVmClusterResponse
     */
    public function associateVirtualMachinesToCloudVmCluster(AssociateVirtualMachinesToCloudVmClusterRequest $args)
    {
        $result = parent::associateVirtualMachinesToCloudVmCluster($args->toArray());
        return new AssociateVirtualMachinesToCloudVmClusterResponse($result->toArray());
    }
}
