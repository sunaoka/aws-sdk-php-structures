<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\UpdateEnrollmentConfiguration;

trait UpdateEnrollmentConfigurationTrait
{
    /**
     * @param UpdateEnrollmentConfigurationRequest $args
     * @return UpdateEnrollmentConfigurationResponse
     */
    public function updateEnrollmentConfiguration(UpdateEnrollmentConfigurationRequest $args)
    {
        $result = parent::updateEnrollmentConfiguration($args->toArray());
        return new UpdateEnrollmentConfigurationResponse($result->toArray());
    }
}
