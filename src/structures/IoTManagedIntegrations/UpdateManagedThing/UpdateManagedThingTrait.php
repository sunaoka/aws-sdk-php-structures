<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\UpdateManagedThing;

trait UpdateManagedThingTrait
{
    /**
     * @param UpdateManagedThingRequest $args
     * @return void
     */
    public function updateManagedThing(UpdateManagedThingRequest $args)
    {
        parent::updateManagedThing($args->toArray());
    }
}
