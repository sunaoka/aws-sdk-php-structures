<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateNetworkAnalyzerConfiguration;

trait UpdateNetworkAnalyzerConfigurationTrait
{
    /**
     * @param UpdateNetworkAnalyzerConfigurationRequest $args
     * @return UpdateNetworkAnalyzerConfigurationResponse
     */
    public function updateNetworkAnalyzerConfiguration(UpdateNetworkAnalyzerConfigurationRequest $args)
    {
        $result = parent::updateNetworkAnalyzerConfiguration($args->toArray());
        return new UpdateNetworkAnalyzerConfigurationResponse($result->toArray());
    }
}
