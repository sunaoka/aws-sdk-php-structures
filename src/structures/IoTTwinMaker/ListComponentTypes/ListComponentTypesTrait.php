<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListComponentTypes;

trait ListComponentTypesTrait
{
    /**
     * @param ListComponentTypesRequest $args
     * @return ListComponentTypesResponse
     */
    public function listComponentTypes(ListComponentTypesRequest $args)
    {
        $result = parent::listComponentTypes($args->toArray());
        return new ListComponentTypesResponse($result->toArray());
    }
}
