<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\DeleteManagedThing;

trait DeleteManagedThingTrait
{
    /**
     * @param DeleteManagedThingRequest $args
     * @return void
     */
    public function deleteManagedThing(DeleteManagedThingRequest $args)
    {
        parent::deleteManagedThing($args->toArray());
    }
}
