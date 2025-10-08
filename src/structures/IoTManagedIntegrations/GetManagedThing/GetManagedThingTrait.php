<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetManagedThing;

trait GetManagedThingTrait
{
    /**
     * @param GetManagedThingRequest $args
     * @return GetManagedThingResponse
     */
    public function getManagedThing(GetManagedThingRequest $args)
    {
        $result = parent::getManagedThing($args->toArray());
        return new GetManagedThingResponse($result->toArray());
    }
}
