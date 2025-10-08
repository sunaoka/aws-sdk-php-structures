<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListNetworkAnalyzerConfigurations;

trait ListNetworkAnalyzerConfigurationsTrait
{
    /**
     * @param ListNetworkAnalyzerConfigurationsRequest $args
     * @return ListNetworkAnalyzerConfigurationsResponse
     */
    public function listNetworkAnalyzerConfigurations(ListNetworkAnalyzerConfigurationsRequest $args)
    {
        $result = parent::listNetworkAnalyzerConfigurations($args->toArray());
        return new ListNetworkAnalyzerConfigurationsResponse($result->toArray());
    }
}
