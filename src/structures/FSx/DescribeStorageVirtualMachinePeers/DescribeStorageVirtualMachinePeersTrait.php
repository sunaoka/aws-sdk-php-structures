<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeStorageVirtualMachinePeers;

trait DescribeStorageVirtualMachinePeersTrait
{
    /**
     * @param DescribeStorageVirtualMachinePeersRequest $args
     * @return DescribeStorageVirtualMachinePeersResponse
     */
    public function describeStorageVirtualMachinePeers(DescribeStorageVirtualMachinePeersRequest $args)
    {
        $result = parent::describeStorageVirtualMachinePeers($args->toArray());
        return new DescribeStorageVirtualMachinePeersResponse($result->toArray());
    }
}
