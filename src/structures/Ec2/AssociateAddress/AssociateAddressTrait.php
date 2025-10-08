<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateAddress;

trait AssociateAddressTrait
{
    /**
     * @param AssociateAddressRequest $args
     * @return AssociateAddressResponse
     */
    public function associateAddress(AssociateAddressRequest $args)
    {
        $result = parent::associateAddress($args->toArray());
        return new AssociateAddressResponse($result->toArray());
    }
}
