<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetEventConfigurationByResourceTypes;

trait GetEventConfigurationByResourceTypesTrait
{
    /**
     * @param GetEventConfigurationByResourceTypesRequest $args
     * @return GetEventConfigurationByResourceTypesResponse
     */
    public function getEventConfigurationByResourceTypes(GetEventConfigurationByResourceTypesRequest $args)
    {
        $result = parent::getEventConfigurationByResourceTypes($args->toArray());
        return new GetEventConfigurationByResourceTypesResponse($result->toArray());
    }
}
