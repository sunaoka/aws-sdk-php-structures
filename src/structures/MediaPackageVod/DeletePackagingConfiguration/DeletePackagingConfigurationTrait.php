<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\DeletePackagingConfiguration;

trait DeletePackagingConfigurationTrait
{
    /**
     * @param DeletePackagingConfigurationRequest $args
     * @return DeletePackagingConfigurationResponse
     */
    public function deletePackagingConfiguration(DeletePackagingConfigurationRequest $args)
    {
        $result = parent::deletePackagingConfiguration($args->toArray());
        return new DeletePackagingConfigurationResponse($result->toArray());
    }
}
