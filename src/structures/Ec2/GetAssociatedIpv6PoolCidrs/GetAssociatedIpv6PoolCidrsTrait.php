<?php

namespace Sunaoka\Aws\Structures\Ec2\GetAssociatedIpv6PoolCidrs;

trait GetAssociatedIpv6PoolCidrsTrait
{
    /**
     * @param GetAssociatedIpv6PoolCidrsRequest $args
     * @return GetAssociatedIpv6PoolCidrsResponse
     */
    public function getAssociatedIpv6PoolCidrs(GetAssociatedIpv6PoolCidrsRequest $args)
    {
        $result = parent::getAssociatedIpv6PoolCidrs($args->toArray());
        return new GetAssociatedIpv6PoolCidrsResponse($result->toArray());
    }
}
