<?php

namespace Sunaoka\Aws\Structures\Odb\AssociateVirtualMachinesToExadbVmCluster;

trait AssociateVirtualMachinesToExadbVmClusterTrait
{
    /**
     * @param AssociateVirtualMachinesToExadbVmClusterRequest $args
     * @return AssociateVirtualMachinesToExadbVmClusterResponse
     */
    public function associateVirtualMachinesToExadbVmCluster(AssociateVirtualMachinesToExadbVmClusterRequest $args)
    {
        $result = parent::associateVirtualMachinesToExadbVmCluster($args->toArray());
        return new AssociateVirtualMachinesToExadbVmClusterResponse($result->toArray());
    }
}
