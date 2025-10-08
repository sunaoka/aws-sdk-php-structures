<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\PutPackageOriginConfiguration;

trait PutPackageOriginConfigurationTrait
{
    /**
     * @param PutPackageOriginConfigurationRequest $args
     * @return PutPackageOriginConfigurationResponse
     */
    public function putPackageOriginConfiguration(PutPackageOriginConfigurationRequest $args)
    {
        $result = parent::putPackageOriginConfiguration($args->toArray());
        return new PutPackageOriginConfigurationResponse($result->toArray());
    }
}
