<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateProxyConfiguration;

trait UpdateProxyConfigurationTrait
{
    /**
     * @param UpdateProxyConfigurationRequest $args
     * @return UpdateProxyConfigurationResponse
     */
    public function updateProxyConfiguration(UpdateProxyConfigurationRequest $args)
    {
        $result = parent::updateProxyConfiguration($args->toArray());
        return new UpdateProxyConfigurationResponse($result->toArray());
    }
}
