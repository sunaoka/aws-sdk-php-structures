<?php

namespace Sunaoka\Aws\Structures\Ec2\DeprovisionPublicIpv4PoolCidr;

trait DeprovisionPublicIpv4PoolCidrTrait
{
    /**
     * @param DeprovisionPublicIpv4PoolCidrRequest $args
     * @return DeprovisionPublicIpv4PoolCidrResponse
     */
    public function deprovisionPublicIpv4PoolCidr(DeprovisionPublicIpv4PoolCidrRequest $args)
    {
        $result = parent::deprovisionPublicIpv4PoolCidr($args->toArray());
        return new DeprovisionPublicIpv4PoolCidrResponse($result->toArray());
    }
}
