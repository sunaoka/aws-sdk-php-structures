<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\PutConfigurationSetDeliveryOptions;

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
