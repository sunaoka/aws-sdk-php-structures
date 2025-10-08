<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamPoolAllocations;

trait GetIpamPoolAllocationsTrait
{
    /**
     * @param GetIpamPoolAllocationsRequest $args
     * @return GetIpamPoolAllocationsResponse
     */
    public function getIpamPoolAllocations(GetIpamPoolAllocationsRequest $args)
    {
        $result = parent::getIpamPoolAllocations($args->toArray());
        return new GetIpamPoolAllocationsResponse($result->toArray());
    }
}
