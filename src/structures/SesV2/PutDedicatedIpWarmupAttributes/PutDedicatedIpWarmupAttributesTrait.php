<?php

namespace Sunaoka\Aws\Structures\SesV2\PutDedicatedIpWarmupAttributes;

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
