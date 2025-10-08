<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateHsmConfiguration;

trait CreateHsmConfigurationTrait
{
    /**
     * @param CreateHsmConfigurationRequest $args
     * @return CreateHsmConfigurationResponse
     */
    public function createHsmConfiguration(CreateHsmConfigurationRequest $args)
    {
        $result = parent::createHsmConfiguration($args->toArray());
        return new CreateHsmConfigurationResponse($result->toArray());
    }
}
