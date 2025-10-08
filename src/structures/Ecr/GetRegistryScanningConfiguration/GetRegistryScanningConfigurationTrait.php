<?php

namespace Sunaoka\Aws\Structures\Ecr\GetRegistryScanningConfiguration;

trait GetRegistryScanningConfigurationTrait
{
    /**
     * @param GetRegistryScanningConfigurationRequest $args
     * @return GetRegistryScanningConfigurationResponse
     */
    public function getRegistryScanningConfiguration(GetRegistryScanningConfigurationRequest $args)
    {
        $result = parent::getRegistryScanningConfiguration($args->toArray());
        return new GetRegistryScanningConfigurationResponse($result->toArray());
    }
}
