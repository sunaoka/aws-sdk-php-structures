<?php

namespace Sunaoka\Aws\Structures\Ec2\AllocateAddress;

trait AllocateAddressTrait
{
    /**
     * @param AllocateAddressRequest $args
     * @return AllocateAddressResponse
     */
    public function allocateAddress(AllocateAddressRequest $args)
    {
        $result = parent::allocateAddress($args->toArray());
        return new AllocateAddressResponse($result->toArray());
    }
}
