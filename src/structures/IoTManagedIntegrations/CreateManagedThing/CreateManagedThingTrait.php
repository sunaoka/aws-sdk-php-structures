<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateManagedThing;

trait CreateManagedThingTrait
{
    /**
     * @param CreateManagedThingRequest $args
     * @return CreateManagedThingResponse
     */
    public function createManagedThing(CreateManagedThingRequest $args)
    {
        $result = parent::createManagedThing($args->toArray());
        return new CreateManagedThingResponse($result->toArray());
    }
}
