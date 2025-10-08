<?php

namespace Sunaoka\Aws\Structures\Lightsail\AllocateStaticIp;

trait AllocateStaticIpTrait
{
    /**
     * @param AllocateStaticIpRequest $args
     * @return AllocateStaticIpResponse
     */
    public function allocateStaticIp(AllocateStaticIpRequest $args)
    {
        $result = parent::allocateStaticIp($args->toArray());
        return new AllocateStaticIpResponse($result->toArray());
    }
}
