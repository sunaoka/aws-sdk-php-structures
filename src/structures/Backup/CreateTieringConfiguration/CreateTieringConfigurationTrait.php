<?php

namespace Sunaoka\Aws\Structures\Backup\CreateTieringConfiguration;

trait CreateTieringConfigurationTrait
{
    /**
     * @param CreateTieringConfigurationRequest $args
     * @return CreateTieringConfigurationResponse
     */
    public function createTieringConfiguration(CreateTieringConfigurationRequest $args)
    {
        $result = parent::createTieringConfiguration($args->toArray());
        return new CreateTieringConfigurationResponse($result->toArray());
    }
}
