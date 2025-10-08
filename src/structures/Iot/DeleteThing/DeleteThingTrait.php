<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteThing;

trait DeleteThingTrait
{
    /**
     * @param DeleteThingRequest $args
     * @return DeleteThingResponse
     */
    public function deleteThing(DeleteThingRequest $args)
    {
        $result = parent::deleteThing($args->toArray());
        return new DeleteThingResponse($result->toArray());
    }
}
