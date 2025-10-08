<?php

namespace Sunaoka\Aws\Structures\Ec2\ReleaseIpamPoolAllocation;

trait ReleaseIpamPoolAllocationTrait
{
    /**
     * @param ReleaseIpamPoolAllocationRequest $args
     * @return ReleaseIpamPoolAllocationResponse
     */
    public function releaseIpamPoolAllocation(ReleaseIpamPoolAllocationRequest $args)
    {
        $result = parent::releaseIpamPoolAllocation($args->toArray());
        return new ReleaseIpamPoolAllocationResponse($result->toArray());
    }
}
