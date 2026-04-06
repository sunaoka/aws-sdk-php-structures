<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteResourceConfiguration;

trait DeleteResourceConfigurationTrait
{
    /**
     * @param DeleteResourceConfigurationRequest $args
     * @return DeleteResourceConfigurationResponse
     */
    public function deleteResourceConfiguration(DeleteResourceConfigurationRequest $args)
    {
        $result = parent::deleteResourceConfiguration($args->toArray());
        return new DeleteResourceConfigurationResponse($result->toArray());
    }
}
