<?php

namespace Sunaoka\Aws\Structures\CloudWatch\UpdateResourceMetricsConfiguration;

trait UpdateResourceMetricsConfigurationTrait
{
    /**
     * @param UpdateResourceMetricsConfigurationRequest $args
     * @return UpdateResourceMetricsConfigurationResponse
     */
    public function updateResourceMetricsConfiguration(UpdateResourceMetricsConfigurationRequest $args)
    {
        $result = parent::updateResourceMetricsConfiguration($args->toArray());
        return new UpdateResourceMetricsConfigurationResponse($result->toArray());
    }
}
