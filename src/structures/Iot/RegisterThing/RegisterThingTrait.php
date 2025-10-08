<?php

namespace Sunaoka\Aws\Structures\Iot\RegisterThing;

trait RegisterThingTrait
{
    /**
     * @param RegisterThingRequest $args
     * @return RegisterThingResponse
     */
    public function registerThing(RegisterThingRequest $args)
    {
        $result = parent::registerThing($args->toArray());
        return new RegisterThingResponse($result->toArray());
    }
}
