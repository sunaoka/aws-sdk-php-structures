<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamResourceCidr;

trait ModifyIpamResourceCidrTrait
{
    /**
     * @param ModifyIpamResourceCidrRequest $args
     * @return ModifyIpamResourceCidrResponse
     */
    public function modifyIpamResourceCidr(ModifyIpamResourceCidrRequest $args)
    {
        $result = parent::modifyIpamResourceCidr($args->toArray());
        return new ModifyIpamResourceCidrResponse($result->toArray());
    }
}
