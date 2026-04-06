<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateResourceConfiguration;

trait CreateResourceConfigurationTrait
{
    /**
     * @param CreateResourceConfigurationRequest $args
     * @return CreateResourceConfigurationResponse
     */
    public function createResourceConfiguration(CreateResourceConfigurationRequest $args)
    {
        $result = parent::createResourceConfiguration($args->toArray());
        return new CreateResourceConfigurationResponse($result->toArray());
    }
}
