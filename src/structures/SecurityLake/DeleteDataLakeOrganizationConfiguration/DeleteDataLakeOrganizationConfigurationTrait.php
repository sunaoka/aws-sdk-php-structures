<?php

namespace Sunaoka\Aws\Structures\SecurityLake\DeleteDataLakeOrganizationConfiguration;

trait DeleteDataLakeOrganizationConfigurationTrait
{
    /**
     * @param DeleteDataLakeOrganizationConfigurationRequest $args
     * @return DeleteDataLakeOrganizationConfigurationResponse
     */
    public function deleteDataLakeOrganizationConfiguration(DeleteDataLakeOrganizationConfigurationRequest $args)
    {
        $result = parent::deleteDataLakeOrganizationConfiguration($args->toArray());
        return new DeleteDataLakeOrganizationConfigurationResponse($result->toArray());
    }
}
