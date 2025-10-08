<?php

namespace Sunaoka\Aws\Structures\Athena\GetCapacityAssignmentConfiguration;

trait GetCapacityAssignmentConfigurationTrait
{
    /**
     * @param GetCapacityAssignmentConfigurationRequest $args
     * @return GetCapacityAssignmentConfigurationResponse
     */
    public function getCapacityAssignmentConfiguration(GetCapacityAssignmentConfigurationRequest $args)
    {
        $result = parent::getCapacityAssignmentConfiguration($args->toArray());
        return new GetCapacityAssignmentConfigurationResponse($result->toArray());
    }
}
