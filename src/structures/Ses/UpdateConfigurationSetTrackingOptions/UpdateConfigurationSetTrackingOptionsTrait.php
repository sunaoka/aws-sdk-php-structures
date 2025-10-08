<?php

namespace Sunaoka\Aws\Structures\Ses\UpdateConfigurationSetTrackingOptions;

trait UpdateConfigurationSetTrackingOptionsTrait
{
    /**
     * @param UpdateConfigurationSetTrackingOptionsRequest $args
     * @return UpdateConfigurationSetTrackingOptionsResponse
     */
    public function updateConfigurationSetTrackingOptions(UpdateConfigurationSetTrackingOptionsRequest $args)
    {
        $result = parent::updateConfigurationSetTrackingOptions($args->toArray());
        return new UpdateConfigurationSetTrackingOptionsResponse($result->toArray());
    }
}
