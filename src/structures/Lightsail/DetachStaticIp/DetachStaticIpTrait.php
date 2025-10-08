<?php

namespace Sunaoka\Aws\Structures\Lightsail\DetachStaticIp;

trait DetachStaticIpTrait
{
    /**
     * @param DetachStaticIpRequest $args
     * @return DetachStaticIpResponse
     */
    public function detachStaticIp(DetachStaticIpRequest $args)
    {
        $result = parent::detachStaticIp($args->toArray());
        return new DetachStaticIpResponse($result->toArray());
    }
}
