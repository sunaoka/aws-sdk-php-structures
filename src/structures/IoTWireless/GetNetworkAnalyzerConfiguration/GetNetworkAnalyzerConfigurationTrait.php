<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetNetworkAnalyzerConfiguration;

trait GetNetworkAnalyzerConfigurationTrait
{
    /**
     * @param GetNetworkAnalyzerConfigurationRequest $args
     * @return GetNetworkAnalyzerConfigurationResponse
     */
    public function getNetworkAnalyzerConfiguration(GetNetworkAnalyzerConfigurationRequest $args)
    {
        $result = parent::getNetworkAnalyzerConfiguration($args->toArray());
        return new GetNetworkAnalyzerConfigurationResponse($result->toArray());
    }
}
