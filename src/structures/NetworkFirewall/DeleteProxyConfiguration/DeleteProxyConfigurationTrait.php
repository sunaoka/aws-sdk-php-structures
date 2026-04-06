<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteProxyConfiguration;

trait DeleteProxyConfigurationTrait
{
    /**
     * @param DeleteProxyConfigurationRequest $args
     * @return DeleteProxyConfigurationResponse
     */
    public function deleteProxyConfiguration(DeleteProxyConfigurationRequest $args)
    {
        $result = parent::deleteProxyConfiguration($args->toArray());
        return new DeleteProxyConfigurationResponse($result->toArray());
    }
}
