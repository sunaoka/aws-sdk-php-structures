<?php

namespace Sunaoka\Aws\Structures\Ec2\DeprovisionIpamPoolCidr;

trait DeprovisionIpamPoolCidrTrait
{
    /**
     * @param DeprovisionIpamPoolCidrRequest $args
     * @return DeprovisionIpamPoolCidrResponse
     */
    public function deprovisionIpamPoolCidr(DeprovisionIpamPoolCidrRequest $args)
    {
        $result = parent::deprovisionIpamPoolCidr($args->toArray());
        return new DeprovisionIpamPoolCidrResponse($result->toArray());
    }
}
