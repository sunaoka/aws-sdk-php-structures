<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateIpamByoasn;

trait AssociateIpamByoasnTrait
{
    /**
     * @param AssociateIpamByoasnRequest $args
     * @return AssociateIpamByoasnResponse
     */
    public function associateIpamByoasn(AssociateIpamByoasnRequest $args)
    {
        $result = parent::associateIpamByoasn($args->toArray());
        return new AssociateIpamByoasnResponse($result->toArray());
    }
}
