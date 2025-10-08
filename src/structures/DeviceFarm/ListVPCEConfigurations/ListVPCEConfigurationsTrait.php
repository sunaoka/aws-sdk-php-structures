<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListVPCEConfigurations;

trait ListVPCEConfigurationsTrait
{
    /**
     * @param ListVPCEConfigurationsRequest $args
     * @return ListVPCEConfigurationsResponse
     */
    public function listVPCEConfigurations(ListVPCEConfigurationsRequest $args)
    {
        $result = parent::listVPCEConfigurations($args->toArray());
        return new ListVPCEConfigurationsResponse($result->toArray());
    }
}
