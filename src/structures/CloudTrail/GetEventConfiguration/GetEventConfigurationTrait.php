<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetEventConfiguration;

trait GetEventConfigurationTrait
{
    /**
     * @param GetEventConfigurationRequest $args
     * @return GetEventConfigurationResponse
     */
    public function getEventConfiguration(GetEventConfigurationRequest $args)
    {
        $result = parent::getEventConfiguration($args->toArray());
        return new GetEventConfigurationResponse($result->toArray());
    }
}
