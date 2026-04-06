<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\GetApplicationAssignmentConfiguration;

trait GetApplicationAssignmentConfigurationTrait
{
    /**
     * @param GetApplicationAssignmentConfigurationRequest $args
     * @return GetApplicationAssignmentConfigurationResponse
     */
    public function getApplicationAssignmentConfiguration(GetApplicationAssignmentConfigurationRequest $args)
    {
        $result = parent::getApplicationAssignmentConfiguration($args->toArray());
        return new GetApplicationAssignmentConfigurationResponse($result->toArray());
    }
}
