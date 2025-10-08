<?php

namespace Sunaoka\Aws\Structures\Iot\GetPackageConfiguration;

trait GetPackageConfigurationTrait
{
    /**
     * @param GetPackageConfigurationRequest $args
     * @return GetPackageConfigurationResponse
     */
    public function getPackageConfiguration(GetPackageConfigurationRequest $args)
    {
        $result = parent::getPackageConfiguration($args->toArray());
        return new GetPackageConfigurationResponse($result->toArray());
    }
}
