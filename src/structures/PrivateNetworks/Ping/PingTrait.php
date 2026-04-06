<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\Ping;

trait PingTrait
{
    /**
     * @return PingResponse
     */
    public function ping()
    {
        $result = parent::ping();
        return new PingResponse($result->toArray());
    }
}
