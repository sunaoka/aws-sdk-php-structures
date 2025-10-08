<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetStaticIps;

trait GetStaticIpsTrait
{
    /**
     * @param GetStaticIpsRequest $args
     * @return GetStaticIpsResponse
     */
    public function getStaticIps(GetStaticIpsRequest $args)
    {
        $result = parent::getStaticIps($args->toArray());
        return new GetStaticIpsResponse($result->toArray());
    }
}
