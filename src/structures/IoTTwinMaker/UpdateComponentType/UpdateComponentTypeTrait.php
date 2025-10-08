<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateComponentType;

trait UpdateComponentTypeTrait
{
    /**
     * @param UpdateComponentTypeRequest $args
     * @return UpdateComponentTypeResponse
     */
    public function updateComponentType(UpdateComponentTypeRequest $args)
    {
        $result = parent::updateComponentType($args->toArray());
        return new UpdateComponentTypeResponse($result->toArray());
    }
}
