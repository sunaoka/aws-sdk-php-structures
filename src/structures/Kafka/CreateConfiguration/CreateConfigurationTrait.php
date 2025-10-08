<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateConfiguration;

trait CreateConfigurationTrait
{
    /**
     * @param CreateConfigurationRequest $args
     * @return CreateConfigurationResponse
     */
    public function createConfiguration(CreateConfigurationRequest $args)
    {
        $result = parent::createConfiguration($args->toArray());
        return new CreateConfigurationResponse($result->toArray());
    }
}
