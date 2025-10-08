<?php

namespace Sunaoka\Aws\Structures\Chime\GetEventsConfiguration;

trait GetEventsConfigurationTrait
{
    /**
     * @param GetEventsConfigurationRequest $args
     * @return GetEventsConfigurationResponse
     */
    public function getEventsConfiguration(GetEventsConfigurationRequest $args)
    {
        $result = parent::getEventsConfiguration($args->toArray());
        return new GetEventsConfigurationResponse($result->toArray());
    }
}
