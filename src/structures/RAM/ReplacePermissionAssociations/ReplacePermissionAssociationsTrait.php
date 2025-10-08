<?php

namespace Sunaoka\Aws\Structures\RAM\ReplacePermissionAssociations;

trait ReplacePermissionAssociationsTrait
{
    /**
     * @param ReplacePermissionAssociationsRequest $args
     * @return ReplacePermissionAssociationsResponse
     */
    public function replacePermissionAssociations(ReplacePermissionAssociationsRequest $args)
    {
        $result = parent::replacePermissionAssociations($args->toArray());
        return new ReplacePermissionAssociationsResponse($result->toArray());
    }
}
