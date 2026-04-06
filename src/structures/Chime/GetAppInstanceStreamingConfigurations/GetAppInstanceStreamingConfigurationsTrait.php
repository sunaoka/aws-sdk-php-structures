<?php

namespace Sunaoka\Aws\Structures\Chime\GetAppInstanceStreamingConfigurations;

trait GetAppInstanceStreamingConfigurationsTrait
{
    /**
     * @param GetAppInstanceStreamingConfigurationsRequest $args
     * @return GetAppInstanceStreamingConfigurationsResponse
     */
    public function getAppInstanceStreamingConfigurations(GetAppInstanceStreamingConfigurationsRequest $args)
    {
        $result = parent::getAppInstanceStreamingConfigurations($args->toArray());
        return new GetAppInstanceStreamingConfigurationsResponse($result->toArray());
    }
}
