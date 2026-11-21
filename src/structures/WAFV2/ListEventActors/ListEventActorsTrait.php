<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListEventActors;

trait ListEventActorsTrait
{
    /**
     * @param ListEventActorsRequest $args
     * @return ListEventActorsResponse
     */
    public function listEventActors(ListEventActorsRequest $args)
    {
        $result = parent::listEventActors($args->toArray());
        return new ListEventActorsResponse($result->toArray());
    }
}
