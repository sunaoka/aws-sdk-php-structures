<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateAutomatedDiscoveryConfiguration;

trait UpdateAutomatedDiscoveryConfigurationTrait
{
    /**
     * @param UpdateAutomatedDiscoveryConfigurationRequest $args
     * @return UpdateAutomatedDiscoveryConfigurationResponse
     */
    public function updateAutomatedDiscoveryConfiguration(UpdateAutomatedDiscoveryConfigurationRequest $args)
    {
        $result = parent::updateAutomatedDiscoveryConfiguration($args->toArray());
        return new UpdateAutomatedDiscoveryConfigurationResponse($result->toArray());
    }
}
