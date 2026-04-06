<?php

namespace Sunaoka\Aws\Structures\AppTest\UpdateTestConfiguration;

trait UpdateTestConfigurationTrait
{
    /**
     * @param UpdateTestConfigurationRequest $args
     * @return UpdateTestConfigurationResponse
     */
    public function updateTestConfiguration(UpdateTestConfigurationRequest $args)
    {
        $result = parent::updateTestConfiguration($args->toArray());
        return new UpdateTestConfigurationResponse($result->toArray());
    }
}
