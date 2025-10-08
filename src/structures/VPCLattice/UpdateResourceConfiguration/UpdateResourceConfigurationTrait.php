<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateResourceConfiguration;

trait UpdateResourceConfigurationTrait
{
    /**
     * @param UpdateResourceConfigurationRequest $args
     * @return UpdateResourceConfigurationResponse
     */
    public function updateResourceConfiguration(UpdateResourceConfigurationRequest $args)
    {
        $result = parent::updateResourceConfiguration($args->toArray());
        return new UpdateResourceConfigurationResponse($result->toArray());
    }
}
