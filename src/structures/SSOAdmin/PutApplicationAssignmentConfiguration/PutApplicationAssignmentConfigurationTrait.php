<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutApplicationAssignmentConfiguration;

trait PutApplicationAssignmentConfigurationTrait
{
    /**
     * @param PutApplicationAssignmentConfigurationRequest $args
     * @return PutApplicationAssignmentConfigurationResponse
     */
    public function putApplicationAssignmentConfiguration(PutApplicationAssignmentConfigurationRequest $args)
    {
        $result = parent::putApplicationAssignmentConfiguration($args->toArray());
        return new PutApplicationAssignmentConfigurationResponse($result->toArray());
    }
}
