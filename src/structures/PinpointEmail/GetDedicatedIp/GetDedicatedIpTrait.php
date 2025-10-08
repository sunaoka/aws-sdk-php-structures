<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetDedicatedIp;

trait GetDedicatedIpTrait
{
    /**
     * @param GetDedicatedIpRequest $args
     * @return GetDedicatedIpResponse
     */
    public function getDedicatedIp(GetDedicatedIpRequest $args)
    {
        $result = parent::getDedicatedIp($args->toArray());
        return new GetDedicatedIpResponse($result->toArray());
    }
}
