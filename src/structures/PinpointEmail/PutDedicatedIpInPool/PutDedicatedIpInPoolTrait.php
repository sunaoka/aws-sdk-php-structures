<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\PutDedicatedIpInPool;

trait PutDedicatedIpInPoolTrait
{
    /**
     * @param PutDedicatedIpInPoolRequest $args
     * @return PutDedicatedIpInPoolResponse
     */
    public function putDedicatedIpInPool(PutDedicatedIpInPoolRequest $args)
    {
        $result = parent::putDedicatedIpInPool($args->toArray());
        return new PutDedicatedIpInPoolResponse($result->toArray());
    }
}
