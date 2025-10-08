<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateNetworkAnalyzerConfiguration;

trait CreateNetworkAnalyzerConfigurationTrait
{
    /**
     * @param CreateNetworkAnalyzerConfigurationRequest $args
     * @return CreateNetworkAnalyzerConfigurationResponse
     */
    public function createNetworkAnalyzerConfiguration(CreateNetworkAnalyzerConfigurationRequest $args)
    {
        $result = parent::createNetworkAnalyzerConfiguration($args->toArray());
        return new CreateNetworkAnalyzerConfigurationResponse($result->toArray());
    }
}
