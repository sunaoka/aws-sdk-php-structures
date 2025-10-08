<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeleteNetworkAnalyzerConfiguration;

trait DeleteNetworkAnalyzerConfigurationTrait
{
    /**
     * @param DeleteNetworkAnalyzerConfigurationRequest $args
     * @return DeleteNetworkAnalyzerConfigurationResponse
     */
    public function deleteNetworkAnalyzerConfiguration(DeleteNetworkAnalyzerConfigurationRequest $args)
    {
        $result = parent::deleteNetworkAnalyzerConfiguration($args->toArray());
        return new DeleteNetworkAnalyzerConfigurationResponse($result->toArray());
    }
}
