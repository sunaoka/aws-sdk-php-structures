<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateThing;

trait UpdateThingTrait
{
    /**
     * @param UpdateThingRequest $args
     * @return UpdateThingResponse
     */
    public function updateThing(UpdateThingRequest $args)
    {
        $result = parent::updateThing($args->toArray());
        return new UpdateThingResponse($result->toArray());
    }
}
