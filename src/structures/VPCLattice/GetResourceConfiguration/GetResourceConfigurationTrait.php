<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetResourceConfiguration;

trait GetResourceConfigurationTrait
{
    /**
     * @param GetResourceConfigurationRequest $args
     * @return GetResourceConfigurationResponse
     */
    public function getResourceConfiguration(GetResourceConfigurationRequest $args)
    {
        $result = parent::getResourceConfiguration($args->toArray());
        return new GetResourceConfigurationResponse($result->toArray());
    }
}
