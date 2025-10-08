<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateDataLakeOrganizationConfiguration;

trait CreateDataLakeOrganizationConfigurationTrait
{
    /**
     * @param CreateDataLakeOrganizationConfigurationRequest $args
     * @return CreateDataLakeOrganizationConfigurationResponse
     */
    public function createDataLakeOrganizationConfiguration(CreateDataLakeOrganizationConfigurationRequest $args)
    {
        $result = parent::createDataLakeOrganizationConfiguration($args->toArray());
        return new CreateDataLakeOrganizationConfigurationResponse($result->toArray());
    }
}
