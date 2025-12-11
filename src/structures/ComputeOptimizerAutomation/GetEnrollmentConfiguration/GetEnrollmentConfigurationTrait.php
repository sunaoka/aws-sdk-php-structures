<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\GetEnrollmentConfiguration;

trait GetEnrollmentConfigurationTrait
{
    /**
     * @param GetEnrollmentConfigurationRequest $args
     * @return GetEnrollmentConfigurationResponse
     */
    public function getEnrollmentConfiguration(GetEnrollmentConfigurationRequest $args)
    {
        $result = parent::getEnrollmentConfiguration($args->toArray());
        return new GetEnrollmentConfigurationResponse($result->toArray());
    }
}
