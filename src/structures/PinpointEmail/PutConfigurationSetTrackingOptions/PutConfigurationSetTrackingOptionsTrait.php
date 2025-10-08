<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\PutConfigurationSetTrackingOptions;

trait PutConfigurationSetTrackingOptionsTrait
{
    /**
     * @param PutConfigurationSetTrackingOptionsRequest $args
     * @return PutConfigurationSetTrackingOptionsResponse
     */
    public function putConfigurationSetTrackingOptions(PutConfigurationSetTrackingOptionsRequest $args)
    {
        $result = parent::putConfigurationSetTrackingOptions($args->toArray());
        return new PutConfigurationSetTrackingOptionsResponse($result->toArray());
    }
}
