<?php

namespace Sunaoka\Aws\Structures\Lightsail\ReleaseStaticIp;

trait ReleaseStaticIpTrait
{
    /**
     * @param ReleaseStaticIpRequest $args
     * @return ReleaseStaticIpResponse
     */
    public function releaseStaticIp(ReleaseStaticIpRequest $args)
    {
        $result = parent::releaseStaticIp($args->toArray());
        return new ReleaseStaticIpResponse($result->toArray());
    }
}
