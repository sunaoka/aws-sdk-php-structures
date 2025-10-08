<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxClusterCodeConfiguration;

trait UpdateKxClusterCodeConfigurationTrait
{
    /**
     * @param UpdateKxClusterCodeConfigurationRequest $args
     * @return UpdateKxClusterCodeConfigurationResponse
     */
    public function updateKxClusterCodeConfiguration(UpdateKxClusterCodeConfigurationRequest $args)
    {
        $result = parent::updateKxClusterCodeConfiguration($args->toArray());
        return new UpdateKxClusterCodeConfigurationResponse($result->toArray());
    }
}
