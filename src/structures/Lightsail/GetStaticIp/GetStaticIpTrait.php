<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetStaticIp;

trait GetStaticIpTrait
{
    /**
     * @param GetStaticIpRequest $args
     * @return GetStaticIpResponse
     */
    public function getStaticIp(GetStaticIpRequest $args)
    {
        $result = parent::getStaticIp($args->toArray());
        return new GetStaticIpResponse($result->toArray());
    }
}
