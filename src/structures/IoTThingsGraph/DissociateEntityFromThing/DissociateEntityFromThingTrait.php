<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\DissociateEntityFromThing;

trait DissociateEntityFromThingTrait
{
    /**
     * @param DissociateEntityFromThingRequest $args
     * @return DissociateEntityFromThingResponse
     */
    public function dissociateEntityFromThing(DissociateEntityFromThingRequest $args)
    {
        $result = parent::dissociateEntityFromThing($args->toArray());
        return new DissociateEntityFromThingResponse($result->toArray());
    }
}
