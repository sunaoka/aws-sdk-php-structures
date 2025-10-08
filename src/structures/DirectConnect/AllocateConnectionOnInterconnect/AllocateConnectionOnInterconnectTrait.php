<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AllocateConnectionOnInterconnect;

trait AllocateConnectionOnInterconnectTrait
{
    /**
     * @param AllocateConnectionOnInterconnectRequest $args
     * @return AllocateConnectionOnInterconnectResponse
     */
    public function allocateConnectionOnInterconnect(AllocateConnectionOnInterconnectRequest $args)
    {
        $result = parent::allocateConnectionOnInterconnect($args->toArray());
        return new AllocateConnectionOnInterconnectResponse($result->toArray());
    }
}
