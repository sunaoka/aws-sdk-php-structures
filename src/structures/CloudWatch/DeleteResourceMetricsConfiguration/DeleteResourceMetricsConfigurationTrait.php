<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DeleteResourceMetricsConfiguration;

trait DeleteResourceMetricsConfigurationTrait
{
    /**
     * @param DeleteResourceMetricsConfigurationRequest $args
     * @return DeleteResourceMetricsConfigurationResponse
     */
    public function deleteResourceMetricsConfiguration(DeleteResourceMetricsConfigurationRequest $args)
    {
        $result = parent::deleteResourceMetricsConfiguration($args->toArray());
        return new DeleteResourceMetricsConfigurationResponse($result->toArray());
    }
}
