<?php

namespace Sunaoka\Aws\Structures\Iot\CreateThing;

trait CreateThingTrait
{
    /**
     * @param CreateThingRequest $args
     * @return CreateThingResponse
     */
    public function createThing(CreateThingRequest $args)
    {
        $result = parent::createThing($args->toArray());
        return new CreateThingResponse($result->toArray());
    }
}
