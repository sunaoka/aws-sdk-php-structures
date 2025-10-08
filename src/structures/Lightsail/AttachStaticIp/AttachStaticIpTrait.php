<?php

namespace Sunaoka\Aws\Structures\Lightsail\AttachStaticIp;

trait AttachStaticIpTrait
{
    /**
     * @param AttachStaticIpRequest $args
     * @return AttachStaticIpResponse
     */
    public function attachStaticIp(AttachStaticIpRequest $args)
    {
        $result = parent::attachStaticIp($args->toArray());
        return new AttachStaticIpResponse($result->toArray());
    }
}
