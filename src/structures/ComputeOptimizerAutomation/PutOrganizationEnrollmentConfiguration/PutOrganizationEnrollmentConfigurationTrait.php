<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\PutOrganizationEnrollmentConfiguration;

trait PutOrganizationEnrollmentConfigurationTrait
{
    /**
     * @param PutOrganizationEnrollmentConfigurationRequest $args
     * @return PutOrganizationEnrollmentConfigurationResponse
     */
    public function putOrganizationEnrollmentConfiguration(PutOrganizationEnrollmentConfigurationRequest $args)
    {
        $result = parent::putOrganizationEnrollmentConfiguration($args->toArray());
        return new PutOrganizationEnrollmentConfigurationResponse($result->toArray());
    }
}
