<?php

namespace Sunaoka\Aws\Structures\Athena\PutCapacityAssignmentConfiguration;

trait PutCapacityAssignmentConfigurationTrait
{
    /**
     * @param PutCapacityAssignmentConfigurationRequest $args
     * @return PutCapacityAssignmentConfigurationResponse
     */
    public function putCapacityAssignmentConfiguration(PutCapacityAssignmentConfigurationRequest $args)
    {
        $result = parent::putCapacityAssignmentConfiguration($args->toArray());
        return new PutCapacityAssignmentConfigurationResponse($result->toArray());
    }
}
