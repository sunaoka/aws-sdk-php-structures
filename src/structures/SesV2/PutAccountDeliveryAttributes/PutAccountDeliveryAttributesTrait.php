<?php

namespace Sunaoka\Aws\Structures\SesV2\PutAccountDeliveryAttributes;

trait PutAccountDeliveryAttributesTrait
{
    /**
     * @param PutAccountDeliveryAttributesRequest $args
     * @return PutAccountDeliveryAttributesResponse
     */
    public function putAccountDeliveryAttributes(PutAccountDeliveryAttributesRequest $args)
    {
        $result = parent::putAccountDeliveryAttributes($args->toArray());
        return new PutAccountDeliveryAttributesResponse($result->toArray());
    }
}
