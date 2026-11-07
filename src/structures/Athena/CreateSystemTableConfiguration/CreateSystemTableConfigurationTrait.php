<?php

namespace Sunaoka\Aws\Structures\Athena\CreateSystemTableConfiguration;

trait CreateSystemTableConfigurationTrait
{
    /**
     * @param CreateSystemTableConfigurationRequest $args
     * @return CreateSystemTableConfigurationResponse
     */
    public function createSystemTableConfiguration(CreateSystemTableConfigurationRequest $args)
    {
        $result = parent::createSystemTableConfiguration($args->toArray());
        return new CreateSystemTableConfigurationResponse($result->toArray());
    }
}
