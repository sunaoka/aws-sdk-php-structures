<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetAgentConfiguration;

trait GetAgentConfigurationTrait
{
    /**
     * @param GetAgentConfigurationRequest $args
     * @return GetAgentConfigurationResponse
     */
    public function getAgentConfiguration(GetAgentConfigurationRequest $args)
    {
        $result = parent::getAgentConfiguration($args->toArray());
        return new GetAgentConfigurationResponse($result->toArray());
    }
}
