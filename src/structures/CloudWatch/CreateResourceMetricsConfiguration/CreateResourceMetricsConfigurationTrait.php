<?php

namespace Sunaoka\Aws\Structures\CloudWatch\CreateResourceMetricsConfiguration;

trait CreateResourceMetricsConfigurationTrait
{
    /**
     * @param CreateResourceMetricsConfigurationRequest $args
     * @return CreateResourceMetricsConfigurationResponse
     */
    public function createResourceMetricsConfiguration(CreateResourceMetricsConfigurationRequest $args)
    {
        $result = parent::createResourceMetricsConfiguration($args->toArray());
        return new CreateResourceMetricsConfigurationResponse($result->toArray());
    }
}
