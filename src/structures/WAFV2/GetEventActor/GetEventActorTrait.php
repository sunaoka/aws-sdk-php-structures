<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetEventActor;

trait GetEventActorTrait
{
    /**
     * @param GetEventActorRequest $args
     * @return GetEventActorResponse
     */
    public function getEventActor(GetEventActorRequest $args)
    {
        $result = parent::getEventActor($args->toArray());
        return new GetEventActorResponse($result->toArray());
    }
}
