<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\ListNamedShadowsForThing;

trait ListNamedShadowsForThingTrait
{
    /**
     * @param ListNamedShadowsForThingRequest $args
     * @return ListNamedShadowsForThingResponse
     */
    public function listNamedShadowsForThing(ListNamedShadowsForThingRequest $args)
    {
        $result = parent::listNamedShadowsForThing($args->toArray());
        return new ListNamedShadowsForThingResponse($result->toArray());
    }
}
