<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\AssociateEntityToThing;

trait AssociateEntityToThingTrait
{
    /**
     * @param AssociateEntityToThingRequest $args
     * @return AssociateEntityToThingResponse
     */
    public function associateEntityToThing(AssociateEntityToThingRequest $args)
    {
        $result = parent::associateEntityToThing($args->toArray());
        return new AssociateEntityToThingResponse($result->toArray());
    }
}
