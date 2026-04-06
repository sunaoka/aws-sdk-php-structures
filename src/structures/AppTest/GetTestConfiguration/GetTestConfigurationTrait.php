<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestConfiguration;

trait GetTestConfigurationTrait
{
    /**
     * @param GetTestConfigurationRequest $args
     * @return GetTestConfigurationResponse
     */
    public function getTestConfiguration(GetTestConfigurationRequest $args)
    {
        $result = parent::getTestConfiguration($args->toArray());
        return new GetTestConfigurationResponse($result->toArray());
    }
}
