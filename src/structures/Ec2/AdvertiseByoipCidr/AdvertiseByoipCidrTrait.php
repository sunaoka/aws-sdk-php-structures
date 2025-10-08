<?php

namespace Sunaoka\Aws\Structures\Ec2\AdvertiseByoipCidr;

trait AdvertiseByoipCidrTrait
{
    /**
     * @param AdvertiseByoipCidrRequest $args
     * @return AdvertiseByoipCidrResponse
     */
    public function advertiseByoipCidr(AdvertiseByoipCidrRequest $args)
    {
        $result = parent::advertiseByoipCidr($args->toArray());
        return new AdvertiseByoipCidrResponse($result->toArray());
    }
}
