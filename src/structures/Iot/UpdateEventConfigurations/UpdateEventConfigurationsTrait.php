<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateEventConfigurations;

trait UpdateEventConfigurationsTrait
{
    /**
     * @param UpdateEventConfigurationsRequest $args
     * @return UpdateEventConfigurationsResponse
     */
    public function updateEventConfigurations(UpdateEventConfigurationsRequest $args)
    {
        $result = parent::updateEventConfigurations($args->toArray());
        return new UpdateEventConfigurationsResponse($result->toArray());
    }
}
