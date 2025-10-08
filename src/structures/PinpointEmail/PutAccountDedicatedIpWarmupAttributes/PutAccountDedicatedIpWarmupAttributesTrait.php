<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\PutAccountDedicatedIpWarmupAttributes;

trait PutAccountDedicatedIpWarmupAttributesTrait
{
    /**
     * @param PutAccountDedicatedIpWarmupAttributesRequest $args
     * @return PutAccountDedicatedIpWarmupAttributesResponse
     */
    public function putAccountDedicatedIpWarmupAttributes(PutAccountDedicatedIpWarmupAttributesRequest $args)
    {
        $result = parent::putAccountDedicatedIpWarmupAttributes($args->toArray());
        return new PutAccountDedicatedIpWarmupAttributesResponse($result->toArray());
    }
}
