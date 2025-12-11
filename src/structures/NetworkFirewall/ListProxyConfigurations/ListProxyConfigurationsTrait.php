<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListProxyConfigurations;

trait ListProxyConfigurationsTrait
{
    /**
     * @param ListProxyConfigurationsRequest $args
     * @return ListProxyConfigurationsResponse
     */
    public function listProxyConfigurations(ListProxyConfigurationsRequest $args)
    {
        $result = parent::listProxyConfigurations($args->toArray());
        return new ListProxyConfigurationsResponse($result->toArray());
    }
}
