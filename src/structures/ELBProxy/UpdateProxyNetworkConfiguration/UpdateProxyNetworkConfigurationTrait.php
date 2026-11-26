<?php

namespace Sunaoka\Aws\Structures\ELBProxy\UpdateProxyNetworkConfiguration;

trait UpdateProxyNetworkConfigurationTrait
{
    /**
     * @param UpdateProxyNetworkConfigurationRequest $args
     * @return UpdateProxyNetworkConfigurationResponse
     */
    public function updateProxyNetworkConfiguration(UpdateProxyNetworkConfigurationRequest $args)
    {
        $result = parent::updateProxyNetworkConfiguration($args->toArray());
        return new UpdateProxyNetworkConfigurationResponse($result->toArray());
    }
}
