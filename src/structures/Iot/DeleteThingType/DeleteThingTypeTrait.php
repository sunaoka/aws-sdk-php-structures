<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteThingType;

trait DeleteThingTypeTrait
{
    /**
     * @param DeleteThingTypeRequest $args
     * @return DeleteThingTypeResponse
     */
    public function deleteThingType(DeleteThingTypeRequest $args)
    {
        $result = parent::deleteThingType($args->toArray());
        return new DeleteThingTypeResponse($result->toArray());
    }
}
