<?php

namespace Sunaoka\Aws\Structures\Kafka\ListConfigurations;

trait ListConfigurationsTrait
{
    /**
     * @param ListConfigurationsRequest $args
     * @return ListConfigurationsResponse
     */
    public function listConfigurations(ListConfigurationsRequest $args)
    {
        $result = parent::listConfigurations($args->toArray());
        return new ListConfigurationsResponse($result->toArray());
    }
}
