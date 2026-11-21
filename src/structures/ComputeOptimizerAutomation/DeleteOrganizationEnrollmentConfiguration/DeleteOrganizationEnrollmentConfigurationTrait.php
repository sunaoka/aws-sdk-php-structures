<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\DeleteOrganizationEnrollmentConfiguration;

trait DeleteOrganizationEnrollmentConfigurationTrait
{
    /**
     * @param DeleteOrganizationEnrollmentConfigurationRequest $args
     * @return DeleteOrganizationEnrollmentConfigurationResponse
     */
    public function deleteOrganizationEnrollmentConfiguration(DeleteOrganizationEnrollmentConfigurationRequest $args)
    {
        $result = parent::deleteOrganizationEnrollmentConfiguration($args->toArray());
        return new DeleteOrganizationEnrollmentConfigurationResponse($result->toArray());
    }
}
