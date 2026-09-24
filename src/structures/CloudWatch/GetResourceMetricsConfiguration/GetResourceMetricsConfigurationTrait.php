<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetResourceMetricsConfiguration;

trait GetResourceMetricsConfigurationTrait
{
    /**
     * @param GetResourceMetricsConfigurationRequest $args
     * @return GetResourceMetricsConfigurationResponse
     */
    public function getResourceMetricsConfiguration(GetResourceMetricsConfigurationRequest $args)
    {
        $result = parent::getResourceMetricsConfiguration($args->toArray());
        return new GetResourceMetricsConfigurationResponse($result->toArray());
    }
}
