<?php

namespace Sunaoka\Aws\Structures\SecurityLake\GetDataLakeOrganizationConfiguration;

trait GetDataLakeOrganizationConfigurationTrait
{
    /**
     * @param GetDataLakeOrganizationConfigurationRequest $args
     * @return GetDataLakeOrganizationConfigurationResponse
     */
    public function getDataLakeOrganizationConfiguration(GetDataLakeOrganizationConfigurationRequest $args)
    {
        $result = parent::getDataLakeOrganizationConfiguration($args->toArray());
        return new GetDataLakeOrganizationConfigurationResponse($result->toArray());
    }
}
