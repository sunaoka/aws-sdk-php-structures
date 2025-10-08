<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateEventConfigurationByResourceTypes;

trait UpdateEventConfigurationByResourceTypesTrait
{
    /**
     * @param UpdateEventConfigurationByResourceTypesRequest $args
     * @return UpdateEventConfigurationByResourceTypesResponse
     */
    public function updateEventConfigurationByResourceTypes(UpdateEventConfigurationByResourceTypesRequest $args)
    {
        $result = parent::updateEventConfigurationByResourceTypes($args->toArray());
        return new UpdateEventConfigurationByResourceTypesResponse($result->toArray());
    }
}
