<?php

namespace Sunaoka\Aws\Structures\Chime\PutEventsConfiguration;

trait PutEventsConfigurationTrait
{
    /**
     * @param PutEventsConfigurationRequest $args
     * @return PutEventsConfigurationResponse
     */
    public function putEventsConfiguration(PutEventsConfigurationRequest $args)
    {
        $result = parent::putEventsConfiguration($args->toArray());
        return new PutEventsConfigurationResponse($result->toArray());
    }
}
