<?php

namespace Sunaoka\Aws\Structures\Ec2\ProvisionPublicIpv4PoolCidr;

trait ProvisionPublicIpv4PoolCidrTrait
{
    /**
     * @param ProvisionPublicIpv4PoolCidrRequest $args
     * @return ProvisionPublicIpv4PoolCidrResponse
     */
    public function provisionPublicIpv4PoolCidr(ProvisionPublicIpv4PoolCidrRequest $args)
    {
        $result = parent::provisionPublicIpv4PoolCidr($args->toArray());
        return new ProvisionPublicIpv4PoolCidrResponse($result->toArray());
    }
}
