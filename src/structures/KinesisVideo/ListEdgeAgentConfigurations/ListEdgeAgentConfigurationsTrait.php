<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListEdgeAgentConfigurations;

trait ListEdgeAgentConfigurationsTrait
{
    /**
     * @param ListEdgeAgentConfigurationsRequest $args
     * @return ListEdgeAgentConfigurationsResponse
     */
    public function listEdgeAgentConfigurations(ListEdgeAgentConfigurationsRequest $args)
    {
        $result = parent::listEdgeAgentConfigurations($args->toArray());
        return new ListEdgeAgentConfigurationsResponse($result->toArray());
    }
}
