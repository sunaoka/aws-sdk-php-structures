<?php

namespace Sunaoka\Aws\Structures\Ec2\ProvisionIpamByoasn;

trait ProvisionIpamByoasnTrait
{
    /**
     * @param ProvisionIpamByoasnRequest $args
     * @return ProvisionIpamByoasnResponse
     */
    public function provisionIpamByoasn(ProvisionIpamByoasnRequest $args)
    {
        $result = parent::provisionIpamByoasn($args->toArray());
        return new ProvisionIpamByoasnResponse($result->toArray());
    }
}
