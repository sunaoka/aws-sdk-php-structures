<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListOrganizationEnrollmentConfigurations;

trait ListOrganizationEnrollmentConfigurationsTrait
{
    /**
     * @param ListOrganizationEnrollmentConfigurationsRequest $args
     * @return ListOrganizationEnrollmentConfigurationsResponse
     */
    public function listOrganizationEnrollmentConfigurations(ListOrganizationEnrollmentConfigurationsRequest $args)
    {
        $result = parent::listOrganizationEnrollmentConfigurations($args->toArray());
        return new ListOrganizationEnrollmentConfigurationsResponse($result->toArray());
    }
}
