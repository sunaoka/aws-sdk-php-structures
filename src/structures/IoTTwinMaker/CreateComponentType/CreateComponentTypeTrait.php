<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateComponentType;

trait CreateComponentTypeTrait
{
    /**
     * @param CreateComponentTypeRequest $args
     * @return CreateComponentTypeResponse
     */
    public function createComponentType(CreateComponentTypeRequest $args)
    {
        $result = parent::createComponentType($args->toArray());
        return new CreateComponentTypeResponse($result->toArray());
    }
}
