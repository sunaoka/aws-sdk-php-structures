<?php

namespace Sunaoka\Aws\Structures\Ecr\PutRegistryScanningConfiguration;

trait PutRegistryScanningConfigurationTrait
{
    /**
     * @param PutRegistryScanningConfigurationRequest $args
     * @return PutRegistryScanningConfigurationResponse
     */
    public function putRegistryScanningConfiguration(PutRegistryScanningConfigurationRequest $args)
    {
        $result = parent::putRegistryScanningConfiguration($args->toArray());
        return new PutRegistryScanningConfigurationResponse($result->toArray());
    }
}
