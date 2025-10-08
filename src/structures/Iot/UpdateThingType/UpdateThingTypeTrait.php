<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateThingType;

trait UpdateThingTypeTrait
{
    /**
     * @param UpdateThingTypeRequest $args
     * @return UpdateThingTypeResponse
     */
    public function updateThingType(UpdateThingTypeRequest $args)
    {
        $result = parent::updateThingType($args->toArray());
        return new UpdateThingTypeResponse($result->toArray());
    }
}
