<?php

namespace Sunaoka\Aws\Structures\Ec2\ProvisionIpamPoolCidr;

trait ProvisionIpamPoolCidrTrait
{
    /**
     * @param ProvisionIpamPoolCidrRequest $args
     * @return ProvisionIpamPoolCidrResponse
     */
    public function provisionIpamPoolCidr(ProvisionIpamPoolCidrRequest $args)
    {
        $result = parent::provisionIpamPoolCidr($args->toArray());
        return new ProvisionIpamPoolCidrResponse($result->toArray());
    }
}
