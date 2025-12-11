<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateProxyConfiguration;

trait CreateProxyConfigurationTrait
{
    /**
     * @param CreateProxyConfigurationRequest $args
     * @return CreateProxyConfigurationResponse
     */
    public function createProxyConfiguration(CreateProxyConfigurationRequest $args)
    {
        $result = parent::createProxyConfiguration($args->toArray());
        return new CreateProxyConfigurationResponse($result->toArray());
    }
}
