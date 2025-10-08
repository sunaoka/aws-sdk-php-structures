<?php

namespace Sunaoka\Aws\Structures\Ec2\DeprovisionIpamByoasn;

trait DeprovisionIpamByoasnTrait
{
    /**
     * @param DeprovisionIpamByoasnRequest $args
     * @return DeprovisionIpamByoasnResponse
     */
    public function deprovisionIpamByoasn(DeprovisionIpamByoasnRequest $args)
    {
        $result = parent::deprovisionIpamByoasn($args->toArray());
        return new DeprovisionIpamByoasnResponse($result->toArray());
    }
}
