<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestConfiguration;

trait CreateTestConfigurationTrait
{
    /**
     * @param CreateTestConfigurationRequest $args
     * @return CreateTestConfigurationResponse
     */
    public function createTestConfiguration(CreateTestConfigurationRequest $args)
    {
        $result = parent::createTestConfiguration($args->toArray());
        return new CreateTestConfigurationResponse($result->toArray());
    }
}
