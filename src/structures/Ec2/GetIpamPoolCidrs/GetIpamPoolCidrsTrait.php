<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamPoolCidrs;

trait GetIpamPoolCidrsTrait
{
    /**
     * @param GetIpamPoolCidrsRequest $args
     * @return GetIpamPoolCidrsResponse
     */
    public function getIpamPoolCidrs(GetIpamPoolCidrsRequest $args)
    {
        $result = parent::getIpamPoolCidrs($args->toArray());
        return new GetIpamPoolCidrsResponse($result->toArray());
    }
}
