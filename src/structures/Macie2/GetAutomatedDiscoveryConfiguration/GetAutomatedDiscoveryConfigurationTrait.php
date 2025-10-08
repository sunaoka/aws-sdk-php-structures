<?php

namespace Sunaoka\Aws\Structures\Macie2\GetAutomatedDiscoveryConfiguration;

trait GetAutomatedDiscoveryConfigurationTrait
{
    /**
     * @param GetAutomatedDiscoveryConfigurationRequest $args
     * @return GetAutomatedDiscoveryConfigurationResponse
     */
    public function getAutomatedDiscoveryConfiguration(GetAutomatedDiscoveryConfigurationRequest $args)
    {
        $result = parent::getAutomatedDiscoveryConfiguration($args->toArray());
        return new GetAutomatedDiscoveryConfigurationResponse($result->toArray());
    }
}
