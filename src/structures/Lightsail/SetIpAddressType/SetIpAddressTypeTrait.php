<?php

namespace Sunaoka\Aws\Structures\Lightsail\SetIpAddressType;

trait SetIpAddressTypeTrait
{
    /**
     * @param SetIpAddressTypeRequest $args
     * @return SetIpAddressTypeResponse
     */
    public function setIpAddressType(SetIpAddressTypeRequest $args)
    {
        $result = parent::setIpAddressType($args->toArray());
        return new SetIpAddressTypeResponse($result->toArray());
    }
}
