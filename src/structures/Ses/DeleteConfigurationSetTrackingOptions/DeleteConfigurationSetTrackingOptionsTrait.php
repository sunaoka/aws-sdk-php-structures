<?php

namespace Sunaoka\Aws\Structures\Ses\DeleteConfigurationSetTrackingOptions;

trait DeleteConfigurationSetTrackingOptionsTrait
{
    /**
     * @param DeleteConfigurationSetTrackingOptionsRequest $args
     * @return DeleteConfigurationSetTrackingOptionsResponse
     */
    public function deleteConfigurationSetTrackingOptions(DeleteConfigurationSetTrackingOptionsRequest $args)
    {
        $result = parent::deleteConfigurationSetTrackingOptions($args->toArray());
        return new DeleteConfigurationSetTrackingOptionsResponse($result->toArray());
    }
}
