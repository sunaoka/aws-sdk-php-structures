<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListManagedThingAccountAssociations;

trait ListManagedThingAccountAssociationsTrait
{
    /**
     * @param ListManagedThingAccountAssociationsRequest $args
     * @return ListManagedThingAccountAssociationsResponse
     */
    public function listManagedThingAccountAssociations(ListManagedThingAccountAssociationsRequest $args)
    {
        $result = parent::listManagedThingAccountAssociations($args->toArray());
        return new ListManagedThingAccountAssociationsResponse($result->toArray());
    }
}
