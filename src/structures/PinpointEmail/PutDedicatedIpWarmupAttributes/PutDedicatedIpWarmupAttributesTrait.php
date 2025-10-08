<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\PutDedicatedIpWarmupAttributes;

trait PutDedicatedIpWarmupAttributesTrait
{
    /**
     * @param PutDedicatedIpWarmupAttributesRequest $args
     * @return PutDedicatedIpWarmupAttributesResponse
     */
    public function putDedicatedIpWarmupAttributes(PutDedicatedIpWarmupAttributesRequest $args)
    {
        $result = parent::putDedicatedIpWarmupAttributes($args->toArray());
        return new PutDedicatedIpWarmupAttributesResponse($result->toArray());
    }
}
