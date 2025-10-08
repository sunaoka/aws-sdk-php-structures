<?php

namespace Sunaoka\Aws\Structures\RAM\ListPermissionAssociations;

trait ListPermissionAssociationsTrait
{
    /**
     * @param ListPermissionAssociationsRequest $args
     * @return ListPermissionAssociationsResponse
     */
    public function listPermissionAssociations(ListPermissionAssociationsRequest $args)
    {
        $result = parent::listPermissionAssociations($args->toArray());
        return new ListPermissionAssociationsResponse($result->toArray());
    }
}
