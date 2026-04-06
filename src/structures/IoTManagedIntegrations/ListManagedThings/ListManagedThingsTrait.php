<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListManagedThings;

trait ListManagedThingsTrait
{
    /**
     * @param ListManagedThingsRequest $args
     * @return ListManagedThingsResponse
     */
    public function listManagedThings(ListManagedThingsRequest $args)
    {
        $result = parent::listManagedThings($args->toArray());
        return new ListManagedThingsResponse($result->toArray());
    }
}
