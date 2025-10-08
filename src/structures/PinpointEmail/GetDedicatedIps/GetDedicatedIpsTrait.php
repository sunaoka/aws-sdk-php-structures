<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetDedicatedIps;

trait GetDedicatedIpsTrait
{
    /**
     * @param GetDedicatedIpsRequest $args
     * @return GetDedicatedIpsResponse
     */
    public function getDedicatedIps(GetDedicatedIpsRequest $args)
    {
        $result = parent::getDedicatedIps($args->toArray());
        return new GetDedicatedIpsResponse($result->toArray());
    }
}
