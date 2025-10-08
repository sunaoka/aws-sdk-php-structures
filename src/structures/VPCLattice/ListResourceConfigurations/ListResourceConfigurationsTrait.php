<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListResourceConfigurations;

trait ListResourceConfigurationsTrait
{
    /**
     * @param ListResourceConfigurationsRequest $args
     * @return ListResourceConfigurationsResponse
     */
    public function listResourceConfigurations(ListResourceConfigurationsRequest $args)
    {
        $result = parent::listResourceConfigurations($args->toArray());
        return new ListResourceConfigurationsResponse($result->toArray());
    }
}
