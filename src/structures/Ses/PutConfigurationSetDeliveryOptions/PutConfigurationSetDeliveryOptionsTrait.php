<?php

namespace Sunaoka\Aws\Structures\Ses\PutConfigurationSetDeliveryOptions;

trait PutConfigurationSetDeliveryOptionsTrait
{
    /**
     * @param PutConfigurationSetDeliveryOptionsRequest $args
     * @return PutConfigurationSetDeliveryOptionsResponse
     */
    public function putConfigurationSetDeliveryOptions(PutConfigurationSetDeliveryOptionsRequest $args)
    {
        $result = parent::putConfigurationSetDeliveryOptions($args->toArray());
        return new PutConfigurationSetDeliveryOptionsResponse($result->toArray());
    }
}
