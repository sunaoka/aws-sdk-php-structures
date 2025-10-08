<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\DeleteComponentType;

trait DeleteComponentTypeTrait
{
    /**
     * @param DeleteComponentTypeRequest $args
     * @return DeleteComponentTypeResponse
     */
    public function deleteComponentType(DeleteComponentTypeRequest $args)
    {
        $result = parent::deleteComponentType($args->toArray());
        return new DeleteComponentTypeResponse($result->toArray());
    }
}
