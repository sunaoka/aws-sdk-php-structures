<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamResourceCidrs;

trait GetIpamResourceCidrsTrait
{
    /**
     * @param GetIpamResourceCidrsRequest $args
     * @return GetIpamResourceCidrsResponse
     */
    public function getIpamResourceCidrs(GetIpamResourceCidrsRequest $args)
    {
        $result = parent::getIpamResourceCidrs($args->toArray());
        return new GetIpamResourceCidrsResponse($result->toArray());
    }
}
