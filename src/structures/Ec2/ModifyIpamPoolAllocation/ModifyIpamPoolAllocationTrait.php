<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamPoolAllocation;

trait ModifyIpamPoolAllocationTrait
{
    /**
     * @param ModifyIpamPoolAllocationRequest $args
     * @return ModifyIpamPoolAllocationResponse
     */
    public function modifyIpamPoolAllocation(ModifyIpamPoolAllocationRequest $args)
    {
        $result = parent::modifyIpamPoolAllocation($args->toArray());
        return new ModifyIpamPoolAllocationResponse($result->toArray());
    }
}
