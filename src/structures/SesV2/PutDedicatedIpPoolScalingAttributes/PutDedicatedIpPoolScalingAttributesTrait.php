<?php

namespace Sunaoka\Aws\Structures\SesV2\PutDedicatedIpPoolScalingAttributes;

trait PutDedicatedIpPoolScalingAttributesTrait
{
    /**
     * @param PutDedicatedIpPoolScalingAttributesRequest $args
     * @return PutDedicatedIpPoolScalingAttributesResponse
     */
    public function putDedicatedIpPoolScalingAttributes(PutDedicatedIpPoolScalingAttributesRequest $args)
    {
        $result = parent::putDedicatedIpPoolScalingAttributes($args->toArray());
        return new PutDedicatedIpPoolScalingAttributesResponse($result->toArray());
    }
}
