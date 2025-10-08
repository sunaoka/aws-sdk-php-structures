<?php

namespace Sunaoka\Aws\Structures\Ses\CreateConfigurationSetTrackingOptions;

trait CreateConfigurationSetTrackingOptionsTrait
{
    /**
     * @param CreateConfigurationSetTrackingOptionsRequest $args
     * @return CreateConfigurationSetTrackingOptionsResponse
     */
    public function createConfigurationSetTrackingOptions(CreateConfigurationSetTrackingOptionsRequest $args)
    {
        $result = parent::createConfigurationSetTrackingOptions($args->toArray());
        return new CreateConfigurationSetTrackingOptionsResponse($result->toArray());
    }
}
