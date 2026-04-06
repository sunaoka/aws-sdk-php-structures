<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\UpdatePackageGroupOriginConfiguration;

trait UpdatePackageGroupOriginConfigurationTrait
{
    /**
     * @param UpdatePackageGroupOriginConfigurationRequest $args
     * @return UpdatePackageGroupOriginConfigurationResponse
     */
    public function updatePackageGroupOriginConfiguration(UpdatePackageGroupOriginConfigurationRequest $args)
    {
        $result = parent::updatePackageGroupOriginConfiguration($args->toArray());
        return new UpdatePackageGroupOriginConfigurationResponse($result->toArray());
    }
}
