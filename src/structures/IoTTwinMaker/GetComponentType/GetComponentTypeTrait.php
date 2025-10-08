<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetComponentType;

trait GetComponentTypeTrait
{
    /**
     * @param GetComponentTypeRequest $args
     * @return GetComponentTypeResponse
     */
    public function getComponentType(GetComponentTypeRequest $args)
    {
        $result = parent::getComponentType($args->toArray());
        return new GetComponentTypeResponse($result->toArray());
    }
}
