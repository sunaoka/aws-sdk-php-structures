<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateClusterConfiguration;

trait UpdateClusterConfigurationTrait
{
    /**
     * @param UpdateClusterConfigurationRequest $args
     * @return UpdateClusterConfigurationResponse
     */
    public function updateClusterConfiguration(UpdateClusterConfigurationRequest $args)
    {
        $result = parent::updateClusterConfiguration($args->toArray());
        return new UpdateClusterConfigurationResponse($result->toArray());
    }
}
