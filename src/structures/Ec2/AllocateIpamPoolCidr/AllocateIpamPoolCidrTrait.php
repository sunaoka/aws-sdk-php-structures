<?php

namespace Sunaoka\Aws\Structures\Ec2\AllocateIpamPoolCidr;

trait AllocateIpamPoolCidrTrait
{
    /**
     * @param AllocateIpamPoolCidrRequest $args
     * @return AllocateIpamPoolCidrResponse
     */
    public function allocateIpamPoolCidr(AllocateIpamPoolCidrRequest $args)
    {
        $result = parent::allocateIpamPoolCidr($args->toArray());
        return new AllocateIpamPoolCidrResponse($result->toArray());
    }
}
