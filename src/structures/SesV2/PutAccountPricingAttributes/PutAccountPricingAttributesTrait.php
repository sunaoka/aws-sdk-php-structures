<?php

namespace Sunaoka\Aws\Structures\SesV2\PutAccountPricingAttributes;

trait PutAccountPricingAttributesTrait
{
    /**
     * @param PutAccountPricingAttributesRequest $args
     * @return PutAccountPricingAttributesResponse
     */
    public function putAccountPricingAttributes(PutAccountPricingAttributesRequest $args)
    {
        $result = parent::putAccountPricingAttributes($args->toArray());
        return new PutAccountPricingAttributesResponse($result->toArray());
    }
}
