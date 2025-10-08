<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListObservabilityConfigurations;

trait ListObservabilityConfigurationsTrait
{
    /**
     * @param ListObservabilityConfigurationsRequest $args
     * @return ListObservabilityConfigurationsResponse
     */
    public function listObservabilityConfigurations(ListObservabilityConfigurationsRequest $args)
    {
        $result = parent::listObservabilityConfigurations($args->toArray());
        return new ListObservabilityConfigurationsResponse($result->toArray());
    }
}
