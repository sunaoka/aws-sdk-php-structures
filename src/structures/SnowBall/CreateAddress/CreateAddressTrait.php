<?php

namespace Sunaoka\Aws\Structures\SnowBall\CreateAddress;

trait CreateAddressTrait
{
    /**
     * @param CreateAddressRequest $args
     * @return CreateAddressResponse
     */
    public function createAddress(CreateAddressRequest $args)
    {
        $result = parent::createAddress($args->toArray());
        return new CreateAddressResponse($result->toArray());
    }
}
